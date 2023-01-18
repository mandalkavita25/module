<?php
namespace Drupal\cmodule\Controller;
use Drupal\Core\Controller\ControllerBase; 

class TestMyController extends ControllerBase {
    public function testpage() {

    $developers = [
      ['name' => 'ankita'],
      ['name' => 'neeta'],
      ['name' => 'mika'],
      ['name' => 'cookie'],
      ['name' => 'rain'],

    ];
    $drupal_developers = '';
    foreach ($developers as $developer){
      $drupal_developers .= '<li>' . $developer['name'] . '</li>';
    }
    // by this you can redirect page to front page automatically that means if you type /testpage in drupal you will get drupal front page
    // return $this->redirect('<front>');
      
        return [ 
          '#type' =>'markup',
          '#markup' => '<ul>'.$drupal_developers.'</ul>'
        ]; 
      }
}


?>





