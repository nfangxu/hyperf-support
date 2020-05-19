<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Fangx\Facade\Support;

use Fangx\Facade\Facade;
use Hyperf\Database\ConnectionResolverInterface;
use Hyperf\Database\Schema\Builder;
use Hyperf\Utils\ApplicationContext;

/**
 * @method static bool hasTable(string $table)
 * @method static array getColumnListing(string $table)
 * @method static array getColumnTypeListing(string $table)
 * @method static void dropAllTables()
 * @method static void dropAllViews()
 * @method static array getAllTables()
 * @method static array getAllViews()
 * @method static bool hasColumn(string $table, string $column)
 * @method static bool hasColumns(string $table, array $columns)
 * @method static string getColumnType(string $table, string $column)
 * @method static void table(string $table, \Closure $callback)
 * @method static void create(string $table, \Closure $callback))
 * @method static void drop(string $table)
 * @method static void dropIfExists(string $table)
 * @method static void rename(string $from, string $to)
 * @method static bool enableForeignKeyConstraints()
 * @method static bool disableForeignKeyConstraints()
 * @method static \Hyperf\Database\Connection getConnection()
 * @method static Builder setConnection(\Hyperf\Database\Connection $connection)
 * @method static void blueprintResolver(\Closure $resolver)
 */
class Schema extends Facade
{
    /**
     * Get a schema builder instance for the default connection.
     *
     * @return Builder
     */
    public static function getFacadeAccessor()
    {
        return static::connection();
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @param string $name
     * @return Builder
     */
    public static function connection($name = null)
    {
        $container = ApplicationContext::getContainer();
        $resolver = $container->get(ConnectionResolverInterface::class);
        return $resolver->connection($name)->getSchemaBuilder();
    }
}