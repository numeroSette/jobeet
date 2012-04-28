<?php

/**
 * JobeetJobTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetJobTable extends Doctrine_Table
{
/**
 * Returns an instance of this class.
 *
 * @return object JobeetJobTable
 */
  public static function getInstance()
  {
      return Doctrine_Core::getTable('JobeetJob');
  }
  
  public function getActiveJobs()
  {
    $q = $this->createQuery('j')
      ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()));
    return $q->execute();
  }
}