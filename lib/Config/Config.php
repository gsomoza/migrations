<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <https://github.com/baleen/migrations>.
 */

namespace Doctrine\DBAL\Migrations\Config;

use Baleen\Cli\Config\Config as BaseConfig;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Config.
 *
 * @author Gabriel Somoza <gabriel@strategery.io>
 */
class Config extends BaseConfig
{
    const CONFIG_FILE_NAME = '.migrations.yml';

    /**
     * @return string
     */
    public function getFileName()
    {
        return static::CONFIG_FILE_NAME;
    }

    /**
     * Returns an instance of the configuration definition.
     *
     * @return ConfigurationInterface
     */
    public function getDefinition()
    {
        return new Definition();
    }

    /**
     * getStorageDefaults
     * @return array
     */
    protected function getStorageDefaults()
    {
        return [
            'connection' => [
                'driver' => '',
                'dbname' => 'dbname',
                'user' => 'dbuser',
                'password' => 'dbpassword',
            ],
        ];
    }

    /**
     * getConnectionParams
     */
    public function getConnectionParams()
    {
        return $this->toArray()['storage']['connection'];
    }
}