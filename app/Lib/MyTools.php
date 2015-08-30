<?php

/**
 * @author yasser
 * @copyright 2012
 */
 define('SOLRFIELDTOKEN', '|SOLRFIELDTOKEN|');
 App::uses('CrontabManager', 'Lib');
 /**
  * MyTools
  * 
  * @package cake-mb
  * @author Yasser
  * @copyright 2012
  * @version $Id$
  * @access public
  */
 class MyTools {
    
/**
 * utf8() encode any string or array in UTF8.
 * 
 * @param mixed $data can be string or array of strings.
 * @return utf8 encoded data 
 */
    /**
     * MyTools::utf8()
     * 
     * @param mixed $mixed
     * @return
     */
    public function utf8($mixed) {        
        mb_detect_order(array(
            'ISO-8859-1', 'ISO-8859-2', 'ISO-8859-3',
            'ISO-8859-4', 'ISO-8859-5', 'ISO-8859-6',
            'ISO-8859-7', 'ISO-8859-8', 'ISO-8859-9',
            'ISO-8859-10', 'ISO-8859-13', 'ISO-8859-14',
            'ISO-8859-15', 'ASCII', 'EUC-JP', 'SJIS',
            'eucJP-win', 'SJIS-win', 'JIS', 'ISO-2022-JP',
            'WINDOWS-1252', 'UTF-7', 'UTF-8' 
        ));
        
        if (is_array($mixed)) {
            array_walk($mixed, function (&$item) {
                $item = MyTools::utf8($item);                
            });
        } 
        elseif(!mb_check_encoding($mixed, 'UTF-8')) {           
            $enc = mb_detect_encoding($mixed);
            $mixed = mb_convert_encoding($mixed, 'UTF-8', $enc);
            $mixed = MyTools::utf8($mixed);
        }
        return $mixed;
    }
    
    /**
     * MyTools::collapseFields()
     * 
     * @param mixed $arr
     * @return
     */
    public function collapseFields(&$arr) {
        if(is_array($arr))
            array_walk($arr, function(&$item, $key){ 
                if($key == 'fields')
                    $item = implode(SOLRFIELDTOKEN, $item);
                else
                    MyTools::collapseFields($item);
            });
    }
    
    /**
     * MyTools::expandFields()
     * 
     * @param mixed $data
     * @param mixed $fields
     * @return
     */
    public function expandFields(&$data, Array $fields) {        
        array_walk_recursive($data, function(&$value, $key, $fields){
            if($key === 'fields') {
                $expanded = array_map(function($item) {
                    return  (strpos($item, ';') !== false)? explode(';', $item):$item;
                }, explode(SOLRFIELDTOKEN, $value));
                $value = array_fill_keys($fields, '');
                foreach($value as &$field) {
                    $field = array_shift($expanded);
                }
            }            
        }, $fields);
    }
    
/**
 * MyTools::cron()
 * 
 * @return
 */
    public function cron() {
        $action = VENDORS.'cakeshell indexa';
        $cli = '-cli '.DS.'usr'.DS.'bin';
        $console = '-console '.CAKE.'Console';
        $app = '-app '.APP;
        
        $crontab = new CrontabManager();
        $job = $crontab->newJob();
        $job->on("*/5 * * * *")->doJob("$action $cli $console $app");         
        
        Configure::restore('for_crontab_uses', 'default');
        $cron = Configure::read('Cron');
        
        if(strpos(trim($crontab->listJobs()), $job->render(false)) === false) {
            if(@strpos(trim($crontab->listJobs()), $cron['entry']) === false)
                $crontab->add($job);
            else
                $crontab->replace($crontab->newJob($cron['entry']), $job);
            $crontab->save();
            Configure::write('Cron.entry', $job->render(false)); 
            Configure::store('for_crontab_uses', 'default');
        }
    }
 };
?>