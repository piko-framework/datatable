# Piko Datatable

JQuery Datatable utility for Piko based projects.

## Installation

```bash
composer require ilhooq/piko-datatable
```

## Use

In view template :

```php
use piko\datatable\Datatable;

/* @var $this \piko\View */

Datatable::init($this, 'users-table', [
    'order' => [[3, 'desc']],
    'language' => Piko::$app->language
]);

<table id="users-table" class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>John</th>
      <th>john</th>
      <th>1</th>
    </tr>
  <tbody>
</table>
```
