<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    $conditions = array();

    //example: search on title
    // $conditions[0] = array(
    //   'field' => 'title',
    //   'comparator' => 'like',
    //   'value' => 'schoen'
    // );

    //example: search on location_id
    // $conditions[0] = array(
    //   'field' => 'location_id',
    //   'comparator' => '=',
    //   'value' => 4
    // );

    //example: search on location name
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'strand'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser_id',
    //   'comparator' => '=',
    //   'value' => '1'
    // );

    //example: search on organiser id
    // $conditions[0] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'LIKE',
    //   'value' => 'gent'
    // );

    //example: search on tag name
    // $conditions[0] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'gastvrijheid'
    // );

    //example: events ending in may 2017
    // $conditions[0] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-05-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '<',
    //   'value' => '2017-06-01 00:00:00'
    // );

    //example: events happening on march first
    // $conditions[0] = array(
    //   'field' => 'start',
    //   'comparator' => '<=',
    //   'value' => '2017-03-01 00:00:00'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '>=',
    //   'value' => '2017-03-01 00:00:00'
    // );

    //example: search on location, with certain end date + time
    // $conditions[0] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'voortuin'
    // );
    // $conditions[1] = array(
    //   'field' => 'end',
    //   'comparator' => '=',
    //   'value' => '2017-05-01 19:00'
    // );

    $conditions[] = array(
      'field' => 'start',
      'comparator' => '>=',
      'value' => date('Y-m-d H:i')
    );

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);

    // $nextEvents = $this->eventDAO->selectNextEvents();
		// $this->set('nextEvents', $nextEvents);
  }

  public function programma() {
    // $month = $_GET['month'];
    //
    // $monthlyEvents = $this->eventDAO->selectEventsByMonth($month);
		// $this->set('monthlyEvents', $monthlyEvents);

    $conditions = array();

    if(!empty($_GET['search'])) {
      $conditions[] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_GET['search']
      );
    }

    if(!empty($_GET['month'])) {
      $conditions[0] = array(
        'field' => 'start',
        'comparator' => '>=',
        'value' => '2017-0' . $_GET['month'] . '-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'start',
        'comparator' => '<',
        'value' => '2017-0' . $_GET['month']+1 . '-01 00:00:00'
      );
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function detail() {
    // $id = $_GET['id'];
    //
    // $event = $this->eventDAO->selectById($id);
		// $this->set('event', $event);
    //
    // $organiserEvents = $this->eventDAO->selectSameOrganisers($id);
		// $this->set('organiserEvents', $organiserEvents);

  $conditions = array();

  if(!empty($_GET['id'])) {
    $conditions[] = array(
      'field' => 'id',
      'comparator' => '=',
      'value' => $_GET['id']
    );
  }

  $event = $this->eventDAO->search($conditions);
  $this->set('event', $event);
  }
}
