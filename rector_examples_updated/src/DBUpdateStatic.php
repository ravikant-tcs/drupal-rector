<?php

namespace Drupal\rector_examples;

/**
 * Example of static method calls from a class.
 */
class DBUpdateStatic {

  /**
   * A simple example using the minimum number of arguments.
   */
  public function simple_example() {
    // TODO: Drupal Rector Notice: Please delete the following comment after you've made any necessary changes.
    // You will need to use `\Drupal\core\Database\Database::getConnection()` if you do not yet have access to the container here.
    $database = \Drupal::database()->update('user');
  }

  /**
   * An example using options.
   */
  public function options() {
    $database = \Drupal\core\Database\Database::getConnection('my_non_default_database')->update('user', []);
  }

  /**
   * An example using variables for the table and options.
   */
  public function table_and_options_as_variables() {
    $table = 'user';

    $options = [
      'target' => 'my_non_default_database',
    ];

    // TODO: Drupal Rector Notice: Please delete the following comment after you've made any necessary changes.
    // If your `options` argument contains a `target` key, you will need to use `\Drupal\core\Database\Database::getConnection('my_database'). Drupal Rector could not yet evaluate the `options` argument since it was a variable.
    $database = \Drupal::database()->update($table, $options);
  }

}
