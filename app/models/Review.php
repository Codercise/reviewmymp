<?php
  class Review extends Eloquent {

    public function Members()
    {
      return $this->belongsTo('Members');
    }

    public function Users()
    {
      return $this->belongsTo('Users');
    }
  }