<?php session_start();

function CheckID ($pid) {
  if ($pid <= 0) {
    return false
  }
  return true
}

function CheckName ($name) {
}

function Checkprice ($price) {
if ($price <= 0) {
  return false
}
  return true
}
