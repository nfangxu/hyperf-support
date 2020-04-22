<?php
declare(strict_types=1);

namespace Fangx\Facade\Support;

use Fangx\Facade\Facade;
use Hyperf\Utils\ApplicationContext;

/**
 * Class File
 * @package App\Facade
 *
 * @method static bool has($path)
 * @method static string|false read($path)
 * @method static resource|false readStream($path)
 * @method static array listContents($directory = '', $recursive = false)
 * @method static array|false getMetadata($path)
 * @method static int|false getSize($path)
 * @method static string|false getMimetype($path)
 * @method static string|false getTimestamp($path)
 * @method static string|false getVisibility($path)
 * @method static bool write($path, $contents, array $config = [])
 * @method static bool writeStream($path, $resource, array $config = [])
 * @method static bool update($path, $contents, array $config = [])
 * @method static bool updateStream($path, $resource, array $config = [])
 * @method static bool rename($path, $newpath)
 * @method static bool copy($path, $newpath)
 * @method static bool delete($path)
 * @method static bool deleteDir($dirname)
 * @method static bool createDir($dirname, array $config = [])
 * @method static bool setVisibility($path, $visibility)
 * @method static bool put($path, $contents, array $config = [])
 * @method static bool putStream($path, $resource, array $config = [])
 * @method static bool readAndDelete($path)
 * @method static \League\Flysystem\Handler get($path, Handler $handler = null)
 *
 * @see Filesystem
 */
class File extends Facade
{
    public static function getFacadeAccessor()
    {
        static::checkClassExists();
        return \League\Flysystem\Filesystem::class;
    }

    public static function storage($name): Filesystem
    {
        static::checkClassExists();
        return ApplicationContext::getContainer()
            ->get(\Hyperf\Filesystem\FilesystemFactory::class)
            ->get($name);
    }

    private static function checkClassExists()
    {
        if (!class_exists(\Hyperf\Filesystem\FilesystemFactory::class)) {
            throw new \RuntimeException('use Fangx\\Facade\\Support\\File::class must installed hyperf/filesystem');
        }
    }
}