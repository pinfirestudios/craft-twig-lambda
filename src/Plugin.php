<?php
/**
 * twiglambda plugin for Craft CMS 3.x
 *
 * Adds Lambda functions to TWIG 
 *
 * @link      www.pinfirestudios.com
 * @copyright Copyright (c) 2019 Pinfire Studios
 */

namespace pinfirestudios\twiglambda;

use Craft;
use craft\base\Plugin as BasePlugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Plugin
 *
 * @author    Pinfire Studios
 * @package   Twiglambda
 * @since     1.0.0
 *
 */
class Plugin extends BasePlugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Plugin 
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new \DPolac\TwigLambda\LambdaExtension());

        Craft::info(
            Craft::t(
                'twiglambda',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
