<?php 
/**
 * This is a library file of common functionst to be used with thia login app
 */

function log_message($message=null){
    /**
     * This function will check for the existence of a text file and open to append
     * text to log progress of the app functionality
     * Amend to include date stamp on message.
     */
    if ($message==null){
        $message = 'default message';
    }
    
    $filename = 'log_file.txt';
    
    if (file_exists($filename)) {
        echo "The file $filename exists";
        /* get date
         * 
         */
        $date= rightHereRightNow();
        $handle =  fopen($filename, 'a') or die ('cannot open :' . $filename);
        fwrite($handle, $date."".$message);
    } else {
        /* file name does not exist so create it for writing
         * 
         */
      $handle =  fopen($filename, 'a') or die ('cannot open :' . $filename);
      fwrite($handle, 'File opened for logging');
      return $handle;
    }
    
}

/**
 * Take a path as a string and make sure the folders exist. Create them
 * if they don't
 *
 * @author WJR
 * @param string $path
 * @return boolean
 *
 */
function isFolders($path)
{
    $subs = explode(DIRECTORY_SEPARATOR, $path);
    $wd = getcwd(); //This is important, it needs to be set back to this once this function finishes.
    chdir(ROOT_DIR);
    foreach ($subs as $folder)
    {
        if (!@chdir($folder))
        {
            if (mkdir($folder, 0777))
            {
                chmod($folder, 0777);
                chdir($folder);
                
            }else{
                return false;
            }
            
        }
    }
    chdir($wd);
    return true;
    
}

function rightHereRightNow()
{  
    
    $dt = new DateTime();
   return $date = $dt->format(APP_DATE_FORMAT);
    
}
?>
