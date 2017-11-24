function advanced() {
    $searchCategories = $this->Game->GameCategory->find('list', compact('conditions'));
    $this->set(compact('searchCategories'));

    $page = 1;
    if (isset($this->params['named']['page'])) {
      $page = $this->params['named']['page'];
    }

    $formData = array();
    $sessionKey = 'advanced_search_query';
    if (isset($this->data['Search']['keywords'])) {
      $formData = $this->data;
      $this->Session->write($sessionKey, $formData);
    } elseif ($this->Session->check($sessionKey)) {
      $formData = $this->Session->read($sessionKey);
    } else {
      Assert::true(false, '404');
    }
    $this->set(compact('formData'));


    if (!empty($formData)) {
      $query = $formData['Search']['keywords'];
      $useQuery = trim(low($query));

      $conditions = array();
      if (!empty($formData['Search']['game_category_id'])) {
        $conditions['GameCategoriesGame.game_category_id'] = $formData['Search']['game_category_id'];
      }
      $conditions = am($conditions, array(
        'Game.published' => '1',
        'or' => array(
          'LOWER(Game.name) LIKE' => "%{$useQuery}%",
          'LOWER(Game.short_desc) LIKE' => "%{$useQuery}%",
          'LOWER(Game.long_desc) LIKE' => "%{$useQuery}%",
          'LOWER(Game.instructions) LIKE' => "%{$useQuery}%"
        )
      ));

      $this->GameCategoriesGame->forcePaginateCount = $this->GameCategoriesGame->paginatorCount(
        'game_categories_games', $conditions, array('Game')
      );
      $contain = array('GameCategory', 'Game.Tag');
      $order = array('Game.name' => 'asc');

      if (!empty($formData['Search']['order_by'])) {
        $order = array($formData['Search']['order_by'] => $formData['Search']['order_dir']);
      }

      $this->paginate['GameCategoriesGame'] = array(
        'conditions' => $this->GameCategoriesGame->paginatorConditions('game_categories_games', $conditions),
        'contain' => $contain,
        'order' => $order,
        'limit' => 12
      );
      $games = $this->paginate('GameCategoriesGame');
      $this->set(compact('games', 'query'));
    }
  }