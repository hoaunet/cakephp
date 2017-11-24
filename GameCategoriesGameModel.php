<?php
class GameCategoriesGame extends AppModel {
  var $name = 'GameCategoriesGame';
  var $belongsTo = array('GameCategory', 'Game');

/**
 * Return count for given pagination
 *
 * @param string $paginator Pagination name
 * @param array $conditions Conditions to use
 * @return mixed Count, or false
 * @access public
 */
  function paginatorCount($paginator, $conditions = array(), $contain = array()) {
    $Db = ConnectionManager::getDataSource($this->useDbConfig);
    if (!empty($contain)) {
      $related = ClassRegistry::init($contain[0]);
    }

    $sql = 'SELECT
      COUNT(DISTINCT ' . $this->alias . '.' . $this->belongsTo['Game']['foreignKey'] . ') count
    FROM ' . $Db->fullTableName($this->table) . ' ' . $Db->name($this->alias) . ' ';
    if (!empty($contain)) {
      $sql .= ' INNER JOIN ' . $Db->fullTableName($related->table) . ' ' . $Db->name($related->alias) . ' ';
    }
    $sql .= $Db->conditions($this->paginatorConditions($paginator, $conditions, 'count'));

    $count = $this->query($sql);

    if (!empty($count)) {
      $count = $count[0][0]['count'];
    }
    return $count;
  }
/**
 * Build conditions for given pagination
 *
 * @param string $paginator Pagination name
 * @param array $extraConditions Extra conditions to use
 * @param string $method 'count', or 'find'
 * @return array Conditions
 * @access public
 */
  function paginatorConditions($paginator, $extraConditions = array(), $method = null) {
    $Db = ConnectionManager::getDataSource($this->useDbConfig);
    $conditions = null;
    if (empty($extraConditions)) {
      $extraConditions = array('1=1');
    }
    switch (strtolower($paginator)) {
      case 'game_categories_games':
        if ($method != 'count') {
          $conditions = array_merge($extraConditions, array('1=1 GROUP BY ' . $this->alias . '.' . $this->belongsTo['Game']['foreignKey']));
        } else {
          $conditions = $extraConditions;
        }
        break;
    }
    return $conditions;
  }
/**
 * Executed by the paginator to get the count. Overriden to allow
 * forcing a count (through var $forcePaginateCount)
 *
 * @param array $conditions Conditions to use
 * @param int $recursive Recursivity level
 * @return int Count
 * @access public
 */
  function paginateCount($conditions, $recursive) {
    if (isset($this->forcePaginateCount)) {
      $count = $this->forcePaginateCount;
      unset($this->forcePaginateCount);
    } else {
      $count = $this->find('count', compact('conditions', 'recursive'));
    }
    return $count;
  }
}
?>