<?php
// For a global parameter initialisation use the following syntax $__param = 'value';
// To overwrite parameter snippet call use $param = 'value';

// StripInput user function. 
// Uncomment and complete the core function and choose your own function name
// string functionName(string searchstring)
// functionName : name of stripInput function passed as &stripInput parameter
// searchstring : string php variable name as searchString input value
// advSearch : string advSearch variable as advSearch parameter and return value
// return the filtered searchString value
/*
function myStripInput($searchString, &$advSearch){
  $advSearch = 'exactphrase';
  return $searchString;
}
*/
// StripOutput user function
// Uncomment and complete the core function and choose your own function name
// string functionName(string results)
// functionName : name of stripOutput function passed as &stripOutput parameter
// results : string php variable name as results
// return the filtered results
/*
function myStripOutput($results){ 

  return $results;
}
*/
// searchWordList user function
// Uncomment and complete the core function and choose your own function name
// string functionName()
// functionName : name of searchWordList function passed as &searchWordList parameter
// return a comma separated list of words

function enSearchWordList(){ 

  $list = "primary,school,education,children,teacher,africa,litteracy,bicycle";
  return $list;
}

function enTVWordList(){ 

  $list = "Burkina Faso,Cameroun,ISSN 1993-8616,Ecuador,Bhutan,2007-10,Romania,Guatemala";
  return $list;
}
function galWordList(){ 

  $list = "Peterhof,Suzdal,Sergijev,Train,Oginu,Enden,yourte,Giant,Temple,Poupées,photo,Ecole";
  return $list;
}
?>