# 🔧 PHP QueryBuilder

![Build Status](https://travis-ci.org/iamludal/PHP-QueryBuilder.svg?branch=master)
![Version](https://img.shields.io/github/v/tag/iamludal/PHP-QueryBuilder?label=version)
![PHP Version](https://img.shields.io/packagist/php-v/ludal/sql-querybuilder?color=blueviolet)
![License](https://img.shields.io/packagist/l/ludal/sql-querybuilder?color=orange)


## ℹ️ Presentation

This is a PHP query builder for simple SQL queries. It allows you to write SQL
queries without having to write them as strings or use heredoc, which often
breaks the code's cleanliness.

> 💡 Made with ❤️ in 🇫🇷


## 😃 Emojis legend

This repo uses [gitmoji](https://github.com/carloscuesta/gitmoji)'s conventions
for commit messages (thanks to [gitmoji-cli](https://github.com/carloscuesta/gitmoji-cli))


## 📘 Usage

### 🏁 Getting started

First, initialize a new instance of `QueryBuilder`.

```php
$builder = new QueryBuilder();
```

> 💡 You can also pass a PDO instance as a parameter to execute and fetch
queries directly.
>
> ```php
> $pdo = new PDO($dsn, $login, $password);
> $builder = new QueryBuilder($pdo);
> ```

From this instance, you can now build your query:

```php
$select = $builder
  ->select()
  ->from('users');

$update = $builder
  ->update('users')
  ->set(['name' => 'John'])
  ->where('id = 6');
```

Then, you can either:
- Convert your query into a SQL string
- Execute the query
- Fetch the results of your query

```php
$select->toSQL(); // returns "SELECT * FROM users"

$select->fetchAll(); // returns the rows fetched from the db

$update->execute(); // executes the UPDATE query
```


### ✅ Supported clauses

- `SELECT`
- `UPDATE`
- `DELETE FROM`
- `INSERT INTO`


## 📖 Docs

Please see [this link](https://github.com/iamludal/PHP-QueryBuilder/wiki) for 
a complete documentation of this library.


## 🙏 Acknowledgement

- [Vincent Aranega](https://github.com/aranega) for tips and tricks about the
code organization
- [shields.io](https://shields.io) for the badges