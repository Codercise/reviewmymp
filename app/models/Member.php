<?php
  class Member extends Eloquent {
    public function reviews()
    {
      return $this->hasMany('Reviews');
    }
  }