<?php
  class Review extends Eloquent {

    public function Members()
    {
      return $this->belongsTo('Member');
    }

    public function Users()
    {
      return $this->belongsTo('Users');
    }
  }