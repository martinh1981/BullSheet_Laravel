<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FakeNew extends Model
{
  protected $table = 'fake_news';
  protected $with = ['user' ];
  protected $fillable = [
      'title', 'file', 'question', 'fakenewsfile'
  ];
  protected $dates = ['created_at'];
  public function user()
  {
      return $this->belongsTo('App\User', 'foreign_key');
  }

  // public function chekNews(){
  //   return $this->hasMany('App\ChekNew','fake_news_id');
  // }

}
