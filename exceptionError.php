<?php

//exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}
checkNum(2);

//try - catch
function checkNum_($number_) {
  if($number_>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}
try {
  checkNum_(2);
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
