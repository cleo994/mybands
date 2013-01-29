<?php session_start() ?>
<?php 
// Read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = 'The band has been deleted';

header('Location:../?p=list_bands');

?>

<!-- To synch workspace with cloud
Commit changes - changes files used to track repository on local machine to check for new files
Push changes - will make changes on github/cloud repository
In order to go this, first you must type a git add command -->