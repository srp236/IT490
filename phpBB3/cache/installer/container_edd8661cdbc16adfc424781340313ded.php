<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class phpbb_cache_container extends Symfony\Component\DependencyInjection\ContainerBuilder
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'cache.driver' => 'getCache_DriverService',
            'config' => 'getConfigService',
            'console.exception_subscriber' => 'getConsole_ExceptionSubscriberService',
            'console.installer.command.config.show' => 'getConsole_Installer_Command_Config_ShowService',
            'console.installer.command.config.validate' => 'getConsole_Installer_Command_Config_ValidateService',
            'console.installer.command.install' => 'getConsole_Installer_Command_InstallService',
            'console.installer.command_collection' => 'getConsole_Installer_CommandCollectionService',
            'console.updater.command.config.show' => 'getConsole_Updater_Command_Config_ShowService',
            'console.updater.command.config.validate' => 'getConsole_Updater_Command_Config_ValidateService',
            'console.updater.command.update' => 'getConsole_Updater_Command_UpdateService',
            'controller.resolver' => 'getController_ResolverService',
            'dispatcher' => 'getDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'installer.file_updater.collection' => 'getInstaller_FileUpdater_CollectionService',
            'installer.file_updater.compress' => 'getInstaller_FileUpdater_CompressService',
            'installer.file_updater.factory' => 'getInstaller_FileUpdater_FactoryService',
            'installer.file_updater.file' => 'getInstaller_FileUpdater_FileService',
            'installer.file_updater.ftp' => 'getInstaller_FileUpdater_FtpService',
            'installer.helper.config' => 'getInstaller_Helper_ConfigService',
            'installer.helper.container_factory' => 'getInstaller_Helper_ContainerFactoryService',
            'installer.helper.database' => 'getInstaller_Helper_DatabaseService',
            'installer.helper.install_helper' => 'getInstaller_Helper_InstallHelperService',
            'installer.helper.iohandler' => 'getInstaller_Helper_IohandlerService',
            'installer.helper.iohandler_ajax' => 'getInstaller_Helper_IohandlerAjaxService',
            'installer.helper.iohandler_cli' => 'getInstaller_Helper_IohandlerCliService',
            'installer.helper.iohandler_factory' => 'getInstaller_Helper_IohandlerFactoryService',
            'installer.helper.update_helper' => 'getInstaller_Helper_UpdateHelperService',
            'installer.install.module_collection' => 'getInstaller_Install_ModuleCollectionService',
            'installer.install_data.add_bots' => 'getInstaller_InstallData_AddBotsService',
            'installer.install_data.add_languages' => 'getInstaller_InstallData_AddLanguagesService',
            'installer.install_data.add_modules' => 'getInstaller_InstallData_AddModulesService',
            'installer.install_data.create_search_index' => 'getInstaller_InstallData_CreateSearchIndexService',
            'installer.install_database.add_config_settings' => 'getInstaller_InstallDatabase_AddConfigSettingsService',
            'installer.install_database.add_default_data' => 'getInstaller_InstallDatabase_AddDefaultDataService',
            'installer.install_database.add_tables' => 'getInstaller_InstallDatabase_AddTablesService',
            'installer.install_database.create_schema_file' => 'getInstaller_InstallDatabase_CreateSchemaFileService',
            'installer.install_database.set_up_database' => 'getInstaller_InstallDatabase_SetUpDatabaseService',
            'installer.install_filesystem.create_config_file' => 'getInstaller_InstallFilesystem_CreateConfigFileService',
            'installer.install_finish.install_extensions' => 'getInstaller_InstallFinish_InstallExtensionsService',
            'installer.install_finish.notify_user' => 'getInstaller_InstallFinish_NotifyUserService',
            'installer.install_finish.populate_migrations' => 'getInstaller_InstallFinish_PopulateMigrationsService',
            'installer.installer.install' => 'getInstaller_Installer_InstallService',
            'installer.installer.update' => 'getInstaller_Installer_UpdateService',
            'installer.module.data_install' => 'getInstaller_Module_DataInstallService',
            'installer.module.data_install_collection' => 'getInstaller_Module_DataInstallCollectionService',
            'installer.module.database_install' => 'getInstaller_Module_DatabaseInstallService',
            'installer.module.filesystem_install' => 'getInstaller_Module_FilesystemInstallService',
            'installer.module.filesystem_update' => 'getInstaller_Module_FilesystemUpdateService',
            'installer.module.finish_install' => 'getInstaller_Module_FinishInstallService',
            'installer.module.install_database_collection' => 'getInstaller_Module_InstallDatabaseCollectionService',
            'installer.module.install_filesystem_collection' => 'getInstaller_Module_InstallFilesystemCollectionService',
            'installer.module.install_finish_collection' => 'getInstaller_Module_InstallFinishCollectionService',
            'installer.module.install_obtain_data_collection' => 'getInstaller_Module_InstallObtainDataCollectionService',
            'installer.module.install_requirements_collection' => 'getInstaller_Module_InstallRequirementsCollectionService',
            'installer.module.obtain_data_install' => 'getInstaller_Module_ObtainDataInstallService',
            'installer.module.obtain_data_update' => 'getInstaller_Module_ObtainDataUpdateService',
            'installer.module.requirements_install' => 'getInstaller_Module_RequirementsInstallService',
            'installer.module.requirements_update' => 'getInstaller_Module_RequirementsUpdateService',
            'installer.module.update_database' => 'getInstaller_Module_UpdateDatabaseService',
            'installer.module.update_database_collection' => 'getInstaller_Module_UpdateDatabaseCollectionService',
            'installer.module.update_filesystem_collection' => 'getInstaller_Module_UpdateFilesystemCollectionService',
            'installer.module.update_obtain_data_collection' => 'getInstaller_Module_UpdateObtainDataCollectionService',
            'installer.module.update_requirements_collection' => 'getInstaller_Module_UpdateRequirementsCollectionService',
            'installer.navigation.convertor_navigation' => 'getInstaller_Navigation_ConvertorNavigationService',
            'installer.navigation.install_navigation' => 'getInstaller_Navigation_InstallNavigationService',
            'installer.navigation.main_navigation' => 'getInstaller_Navigation_MainNavigationService',
            'installer.navigation.provider' => 'getInstaller_Navigation_ProviderService',
            'installer.navigation.service_collection' => 'getInstaller_Navigation_ServiceCollectionService',
            'installer.navigation.update_navigation' => 'getInstaller_Navigation_UpdateNavigationService',
            'installer.obtain_data.file_updater_method' => 'getInstaller_ObtainData_FileUpdaterMethodService',
            'installer.obtain_data.obtain_admin_data' => 'getInstaller_ObtainData_ObtainAdminDataService',
            'installer.obtain_data.obtain_board_data' => 'getInstaller_ObtainData_ObtainBoardDataService',
            'installer.obtain_data.obtain_database_data' => 'getInstaller_ObtainData_ObtainDatabaseDataService',
            'installer.obtain_data.obtain_email_data' => 'getInstaller_ObtainData_ObtainEmailDataService',
            'installer.obtain_data.obtain_imagick_path' => 'getInstaller_ObtainData_ObtainImagickPathService',
            'installer.obtain_data.obtain_server_data' => 'getInstaller_ObtainData_ObtainServerDataService',
            'installer.obtain_data.update_files' => 'getInstaller_ObtainData_UpdateFilesService',
            'installer.obtain_data.update_ftp_settings' => 'getInstaller_ObtainData_UpdateFtpSettingsService',
            'installer.obtain_data.update_options' => 'getInstaller_ObtainData_UpdateOptionsService',
            'installer.requirements.check_filesystem' => 'getInstaller_Requirements_CheckFilesystemService',
            'installer.requirements.check_filesystem_update' => 'getInstaller_Requirements_CheckFilesystemUpdateService',
            'installer.requirements.check_server_environment' => 'getInstaller_Requirements_CheckServerEnvironmentService',
            'installer.requirements.update_requirements' => 'getInstaller_Requirements_UpdateRequirementsService',
            'installer.update.module_collection' => 'getInstaller_Update_ModuleCollectionService',
            'installer.update_database.update_extensions' => 'getInstaller_UpdateDatabase_UpdateExtensionsService',
            'installer.update_database.update_task' => 'getInstaller_UpdateDatabase_UpdateTaskService',
            'installer.update_filesystem.check_task' => 'getInstaller_UpdateFilesystem_CheckTaskService',
            'installer.update_filesystem.diff_files' => 'getInstaller_UpdateFilesystem_DiffFilesService',
            'installer.update_filesystem.download_updated_files' => 'getInstaller_UpdateFilesystem_DownloadUpdatedFilesService',
            'installer.update_filesystem.show_file_status' => 'getInstaller_UpdateFilesystem_ShowFileStatusService',
            'installer.update_filesystem.update_files' => 'getInstaller_UpdateFilesystem_UpdateFilesService',
            'kernel_exception_subscriber' => 'getKernelExceptionSubscriberService',
            'kernel_terminate_subscriber' => 'getKernelTerminateSubscriberService',
            'language' => 'getLanguageService',
            'language.helper.language_file' => 'getLanguage_Helper_LanguageFileService',
            'language.loader' => 'getLanguage_LoaderService',
            'path_helper' => 'getPathHelperService',
            'php_ini' => 'getPhpIniService',
            'phpbb.installer.controller.convert' => 'getPhpbb_Installer_Controller_ConvertService',
            'phpbb.installer.controller.file_downloader' => 'getPhpbb_Installer_Controller_FileDownloaderService',
            'phpbb.installer.controller.helper' => 'getPhpbb_Installer_Controller_HelperService',
            'phpbb.installer.controller.install' => 'getPhpbb_Installer_Controller_InstallService',
            'phpbb.installer.controller.status' => 'getPhpbb_Installer_Controller_StatusService',
            'phpbb.installer.controller.update' => 'getPhpbb_Installer_Controller_UpdateService',
            'phpbb.installer.controller.welcome' => 'getPhpbb_Installer_Controller_WelcomeService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'router.listener' => 'getRouter_ListenerService',
            'routing.chained_resources_locator' => 'getRouting_ChainedResourcesLocatorService',
            'routing.delegated_loader' => 'getRouting_DelegatedLoaderService',
            'routing.helper' => 'getRouting_HelperService',
            'routing.loader.collection' => 'getRouting_Loader_CollectionService',
            'routing.loader.yaml' => 'getRouting_Loader_YamlService',
            'routing.resolver' => 'getRouting_ResolverService',
            'routing.resources_locator.collection' => 'getRouting_ResourcesLocator_CollectionService',
            'routing.resources_locator.default' => 'getRouting_ResourcesLocator_DefaultService',
            'symfony_request' => 'getSymfonyRequestService',
            'symfony_response_listener' => 'getSymfonyResponseListenerService',
            'template' => 'getTemplateService',
            'template.twig.environment' => 'getTemplate_Twig_EnvironmentService',
            'template.twig.extensions.collection' => 'getTemplate_Twig_Extensions_CollectionService',
            'template.twig.extensions.debug' => 'getTemplate_Twig_Extensions_DebugService',
            'template.twig.extensions.phpbb' => 'getTemplate_Twig_Extensions_PhpbbService',
            'template.twig.extensions.routing' => 'getTemplate_Twig_Extensions_RoutingService',
            'template.twig.lexer' => 'getTemplate_Twig_LexerService',
            'template.twig.loader' => 'getTemplate_Twig_LoaderService',
            'template_context' => 'getTemplateContextService',
            'user' => 'getUserService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'cache.driver' shared service.
     *
     * @return \phpbb\cache\driver\file
     */
    protected function getCache_DriverService()
    {
        return $this->services['cache.driver'] = new \phpbb\cache\driver\file('../cache/installer/');
    }

    /**
     * Gets the public 'config' shared service.
     *
     * @return \phpbb\config\config
     */
    protected function getConfigService()
    {
        return $this->services['config'] = new \phpbb\config\config(array('rand_seed' => 'installer_seed', 'rand_seed_last_update' => 0));
    }

    /**
     * Gets the public 'console.exception_subscriber' shared service.
     *
     * @return \phpbb\console\exception_subscriber
     */
    protected function getConsole_ExceptionSubscriberService()
    {
        return $this->services['console.exception_subscriber'] = new \phpbb\console\exception_subscriber($this->get('language'), false);
    }

    /**
     * Gets the public 'console.installer.command.config.show' shared service.
     *
     * @return \phpbb\install\console\command\install\config\show
     */
    protected function getConsole_Installer_Command_Config_ShowService()
    {
        return $this->services['console.installer.command.config.show'] = new \phpbb\install\console\command\install\config\show($this->get('language'), $this->get('installer.helper.iohandler_factory'));
    }

    /**
     * Gets the public 'console.installer.command.config.validate' shared service.
     *
     * @return \phpbb\install\console\command\install\config\validate
     */
    protected function getConsole_Installer_Command_Config_ValidateService()
    {
        return $this->services['console.installer.command.config.validate'] = new \phpbb\install\console\command\install\config\validate($this->get('language'), $this->get('installer.helper.iohandler_factory'));
    }

    /**
     * Gets the public 'console.installer.command.install' shared service.
     *
     * @return \phpbb\install\console\command\install\install
     */
    protected function getConsole_Installer_Command_InstallService()
    {
        return $this->services['console.installer.command.install'] = new \phpbb\install\console\command\install\install($this->get('language'), $this->get('installer.helper.iohandler_factory'), $this->get('installer.installer.install'), $this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'console.installer.command_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getConsole_Installer_CommandCollectionService()
    {
        $this->services['console.installer.command_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('console.installer.command.install');
        $instance->add('console.installer.command.config.show');
        $instance->add('console.installer.command.config.validate');
        $instance->add('console.updater.command.update');
        $instance->add('console.updater.command.config.show');
        $instance->add('console.updater.command.config.validate');

        return $instance;
    }

    /**
     * Gets the public 'console.updater.command.config.show' shared service.
     *
     * @return \phpbb\install\console\command\update\config\show
     */
    protected function getConsole_Updater_Command_Config_ShowService()
    {
        return $this->services['console.updater.command.config.show'] = new \phpbb\install\console\command\update\config\show($this->get('language'), $this->get('installer.helper.iohandler_factory'));
    }

    /**
     * Gets the public 'console.updater.command.config.validate' shared service.
     *
     * @return \phpbb\install\console\command\update\config\validate
     */
    protected function getConsole_Updater_Command_Config_ValidateService()
    {
        return $this->services['console.updater.command.config.validate'] = new \phpbb\install\console\command\update\config\validate($this->get('language'), $this->get('installer.helper.iohandler_factory'));
    }

    /**
     * Gets the public 'console.updater.command.update' shared service.
     *
     * @return \phpbb\install\console\command\update\update
     */
    protected function getConsole_Updater_Command_UpdateService()
    {
        return $this->services['console.updater.command.update'] = new \phpbb\install\console\command\update\update($this->get('language'), $this->get('installer.helper.iohandler_factory'), $this->get('installer.installer.update'), $this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'controller.resolver' shared service.
     *
     * @return \phpbb\controller\resolver
     */
    protected function getController_ResolverService()
    {
        return $this->services['controller.resolver'] = new \phpbb\controller\resolver($this, '../', $this->get('template'));
    }

    /**
     * Gets the public 'dispatcher' shared service.
     *
     * @return \phpbb\event\dispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = new \phpbb\event\dispatcher($this);

        $instance->addSubscriberService('kernel_exception_subscriber', 'phpbb\\install\\event\\kernel_exception_subscriber');
        $instance->addSubscriberService('kernel_terminate_subscriber', 'phpbb\\event\\kernel_terminate_subscriber');
        $instance->addSubscriberService('symfony_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('router.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('console.exception_subscriber', 'phpbb\\console\\exception_subscriber');

        return $instance;
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \phpbb\routing\file_locator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \phpbb\routing\file_locator($this->get('filesystem'), '../');
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \phpbb\filesystem\filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \phpbb\filesystem\filesystem();
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('dispatcher'), $this->get('controller.resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'installer.file_updater.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getInstaller_FileUpdater_CollectionService()
    {
        $this->services['installer.file_updater.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('installer.file_updater.compress');
        $instance->add('installer.file_updater.ftp');
        $instance->add('installer.file_updater.file');

        return $instance;
    }

    /**
     * Gets the public 'installer.file_updater.compress' shared service.
     *
     * @return \phpbb\install\helper\file_updater\compression_file_updater
     */
    protected function getInstaller_FileUpdater_CompressService()
    {
        return $this->services['installer.file_updater.compress'] = new \phpbb\install\helper\file_updater\compression_file_updater($this->get('installer.helper.update_helper'), '../', 'php');
    }

    /**
     * Gets the public 'installer.file_updater.factory' shared service.
     *
     * @return \phpbb\install\helper\file_updater\factory
     */
    protected function getInstaller_FileUpdater_FactoryService()
    {
        return $this->services['installer.file_updater.factory'] = new \phpbb\install\helper\file_updater\factory($this->get('installer.file_updater.collection'));
    }

    /**
     * Gets the public 'installer.file_updater.file' shared service.
     *
     * @return \phpbb\install\helper\file_updater\file_updater
     */
    protected function getInstaller_FileUpdater_FileService()
    {
        return $this->services['installer.file_updater.file'] = new \phpbb\install\helper\file_updater\file_updater($this->get('filesystem'), '../');
    }

    /**
     * Gets the public 'installer.file_updater.ftp' shared service.
     *
     * @return \phpbb\install\helper\file_updater\ftp_file_updater
     */
    protected function getInstaller_FileUpdater_FtpService()
    {
        return $this->services['installer.file_updater.ftp'] = new \phpbb\install\helper\file_updater\ftp_file_updater($this->get('installer.helper.update_helper'), '../', 'php');
    }

    /**
     * Gets the public 'installer.helper.config' shared service.
     *
     * @return \phpbb\install\helper\config
     */
    protected function getInstaller_Helper_ConfigService()
    {
        return $this->services['installer.helper.config'] = new \phpbb\install\helper\config($this->get('filesystem'), $this->get('php_ini'), '../');
    }

    /**
     * Gets the public 'installer.helper.container_factory' shared service.
     *
     * @return \phpbb\install\helper\container_factory
     */
    protected function getInstaller_Helper_ContainerFactoryService()
    {
        return $this->services['installer.helper.container_factory'] = new \phpbb\install\helper\container_factory($this->get('language'), $this->get('request'), $this->get('installer.helper.update_helper'), '../', 'php');
    }

    /**
     * Gets the public 'installer.helper.database' shared service.
     *
     * @return \phpbb\install\helper\database
     */
    protected function getInstaller_Helper_DatabaseService()
    {
        return $this->services['installer.helper.database'] = new \phpbb\install\helper\database($this->get('filesystem'), '../');
    }

    /**
     * Gets the public 'installer.helper.install_helper' shared service.
     *
     * @return \phpbb\install\helper\install_helper
     */
    protected function getInstaller_Helper_InstallHelperService()
    {
        return $this->services['installer.helper.install_helper'] = new \phpbb\install\helper\install_helper('../', 'php');
    }

    /**
     * Gets the public 'installer.helper.iohandler' shared service.
     *
     * @return \phpbb\install\helper\iohandler\iohandler_interface
     */
    protected function getInstaller_Helper_IohandlerService()
    {
        return $this->services['installer.helper.iohandler'] = $this->get('installer.helper.iohandler_factory')->get();
    }

    /**
     * Gets the public 'installer.helper.iohandler_ajax' shared service.
     *
     * @return \phpbb\install\helper\iohandler\ajax_iohandler
     */
    protected function getInstaller_Helper_IohandlerAjaxService()
    {
        $this->services['installer.helper.iohandler_ajax'] = $instance = new \phpbb\install\helper\iohandler\ajax_iohandler($this->get('path_helper'), $this->get('request'), $this->get('template'), $this->get('router'), '../');

        $instance->set_language($this->get('language'));

        return $instance;
    }

    /**
     * Gets the public 'installer.helper.iohandler_cli' shared service.
     *
     * @return \phpbb\install\helper\iohandler\cli_iohandler
     */
    protected function getInstaller_Helper_IohandlerCliService()
    {
        $this->services['installer.helper.iohandler_cli'] = $instance = new \phpbb\install\helper\iohandler\cli_iohandler();

        $instance->set_language($this->get('language'));

        return $instance;
    }

    /**
     * Gets the public 'installer.helper.iohandler_factory' shared service.
     *
     * @return \phpbb\install\helper\iohandler\factory
     */
    protected function getInstaller_Helper_IohandlerFactoryService()
    {
        return $this->services['installer.helper.iohandler_factory'] = new \phpbb\install\helper\iohandler\factory($this);
    }

    /**
     * Gets the public 'installer.helper.update_helper' shared service.
     *
     * @return \phpbb\install\helper\update_helper
     */
    protected function getInstaller_Helper_UpdateHelperService()
    {
        return $this->services['installer.helper.update_helper'] = new \phpbb\install\helper\update_helper('../');
    }

    /**
     * Gets the public 'installer.install.module_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Install_ModuleCollectionService()
    {
        $this->services['installer.install.module_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add('installer.module.data_install', 50);
        $instance->add('installer.module.database_install', 40);
        $instance->add('installer.module.filesystem_install', 30);
        $instance->add('installer.module.finish_install', 60);
        $instance->add('installer.module.obtain_data_install', 20);
        $instance->add('installer.module.requirements_install', 10);

        return $instance;
    }

    /**
     * Gets the public 'installer.install_data.add_bots' shared service.
     *
     * @return \phpbb\install\module\install_data\task\add_bots
     */
    protected function getInstaller_InstallData_AddBotsService()
    {
        return $this->services['installer.install_data.add_bots'] = new \phpbb\install\module\install_data\task\add_bots($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.container_factory'), $this->get('language'), '../', 'php');
    }

    /**
     * Gets the public 'installer.install_data.add_languages' shared service.
     *
     * @return \phpbb\install\module\install_data\task\add_languages
     */
    protected function getInstaller_InstallData_AddLanguagesService()
    {
        return $this->services['installer.install_data.add_languages'] = new \phpbb\install\module\install_data\task\add_languages($this->get('installer.helper.iohandler'), $this->get('installer.helper.container_factory'), $this->get('language.helper.language_file'));
    }

    /**
     * Gets the public 'installer.install_data.add_modules' shared service.
     *
     * @return \phpbb\install\module\install_data\task\add_modules
     */
    protected function getInstaller_InstallData_AddModulesService()
    {
        return $this->services['installer.install_data.add_modules'] = new \phpbb\install\module\install_data\task\add_modules($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.container_factory'));
    }

    /**
     * Gets the public 'installer.install_data.create_search_index' shared service.
     *
     * @return \phpbb\install\module\install_data\task\create_search_index
     */
    protected function getInstaller_InstallData_CreateSearchIndexService()
    {
        return $this->services['installer.install_data.create_search_index'] = new \phpbb\install\module\install_data\task\create_search_index($this->get('config'), $this->get('installer.helper.container_factory'), '../', 'php');
    }

    /**
     * Gets the public 'installer.install_database.add_config_settings' shared service.
     *
     * @return \phpbb\install\module\install_database\task\add_config_settings
     */
    protected function getInstaller_InstallDatabase_AddConfigSettingsService()
    {
        return $this->services['installer.install_database.add_config_settings'] = new \phpbb\install\module\install_database\task\add_config_settings($this->get('filesystem'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.container_factory'), $this->get('language'), '../');
    }

    /**
     * Gets the public 'installer.install_database.add_default_data' shared service.
     *
     * @return \phpbb\install\module\install_database\task\add_default_data
     */
    protected function getInstaller_InstallDatabase_AddDefaultDataService()
    {
        return $this->services['installer.install_database.add_default_data'] = new \phpbb\install\module\install_database\task\add_default_data($this->get('installer.helper.database'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.container_factory'), $this->get('language'), '../');
    }

    /**
     * Gets the public 'installer.install_database.add_tables' shared service.
     *
     * @return \phpbb\install\module\install_database\task\add_tables
     */
    protected function getInstaller_InstallDatabase_AddTablesService()
    {
        return $this->services['installer.install_database.add_tables'] = new \phpbb\install\module\install_database\task\add_tables($this->get('installer.helper.config'), $this->get('installer.helper.database'), $this->get('filesystem'), '../');
    }

    /**
     * Gets the public 'installer.install_database.create_schema_file' shared service.
     *
     * @return \phpbb\install\module\install_database\task\create_schema_file
     */
    protected function getInstaller_InstallDatabase_CreateSchemaFileService()
    {
        return $this->services['installer.install_database.create_schema_file'] = new \phpbb\install\module\install_database\task\create_schema_file($this->get('installer.helper.config'), $this->get('installer.helper.database'), $this->get('filesystem'), '../', 'php');
    }

    /**
     * Gets the public 'installer.install_database.set_up_database' shared service.
     *
     * @return \phpbb\install\module\install_database\task\set_up_database
     */
    protected function getInstaller_InstallDatabase_SetUpDatabaseService()
    {
        return $this->services['installer.install_database.set_up_database'] = new \phpbb\install\module\install_database\task\set_up_database($this->get('installer.helper.config'), $this->get('installer.helper.database'), $this->get('filesystem'), $this->get('installer.helper.iohandler'), '../');
    }

    /**
     * Gets the public 'installer.install_filesystem.create_config_file' shared service.
     *
     * @return \phpbb\install\module\install_filesystem\task\create_config_file
     */
    protected function getInstaller_InstallFilesystem_CreateConfigFileService()
    {
        return $this->services['installer.install_filesystem.create_config_file'] = new \phpbb\install\module\install_filesystem\task\create_config_file($this->get('filesystem'), $this->get('installer.helper.config'), $this->get('installer.helper.database'), $this->get('installer.helper.iohandler'), '../', 'php', array());
    }

    /**
     * Gets the public 'installer.install_finish.install_extensions' shared service.
     *
     * @return \phpbb\install\module\install_finish\task\install_extensions
     */
    protected function getInstaller_InstallFinish_InstallExtensionsService()
    {
        return $this->services['installer.install_finish.install_extensions'] = new \phpbb\install\module\install_finish\task\install_extensions($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), '../');
    }

    /**
     * Gets the public 'installer.install_finish.notify_user' shared service.
     *
     * @return \phpbb\install\module\install_finish\task\notify_user
     */
    protected function getInstaller_InstallFinish_NotifyUserService()
    {
        return $this->services['installer.install_finish.notify_user'] = new \phpbb\install\module\install_finish\task\notify_user($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), '../', 'php');
    }

    /**
     * Gets the public 'installer.install_finish.populate_migrations' shared service.
     *
     * @return \phpbb\install\module\install_finish\task\populate_migrations
     */
    protected function getInstaller_InstallFinish_PopulateMigrationsService()
    {
        return $this->services['installer.install_finish.populate_migrations'] = new \phpbb\install\module\install_finish\task\populate_migrations($this->get('installer.helper.config'), $this->get('installer.helper.container_factory'));
    }

    /**
     * Gets the public 'installer.installer.install' shared service.
     *
     * @return \phpbb\install\installer
     */
    protected function getInstaller_Installer_InstallService()
    {
        $this->services['installer.installer.install'] = $instance = new \phpbb\install\installer($this->get('cache.driver'), $this->get('installer.helper.config'), $this->get('path_helper'), $this->get('installer.helper.container_factory'));

        $instance->set_modules($this->get('installer.install.module_collection'));
        $instance->set_purge_cache_before(false);

        return $instance;
    }

    /**
     * Gets the public 'installer.installer.update' shared service.
     *
     * @return \phpbb\install\installer
     */
    protected function getInstaller_Installer_UpdateService()
    {
        $this->services['installer.installer.update'] = $instance = new \phpbb\install\installer($this->get('cache.driver'), $this->get('installer.helper.config'), $this->get('path_helper'), $this->get('installer.helper.container_factory'));

        $instance->set_modules($this->get('installer.update.module_collection'));
        $instance->set_purge_cache_before(true);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.data_install' shared service.
     *
     * @return \phpbb\install\module\install_data\module
     */
    protected function getInstaller_Module_DataInstallService()
    {
        $this->services['installer.module.data_install'] = $instance = new \phpbb\install\module\install_data\module($this->get('installer.module.data_install_collection'));

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.data_install_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_DataInstallCollectionService()
    {
        $this->services['installer.module.data_install_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.install_data.add_bots', 'phpbb\\install\\module\\install_data\\task\\add_bots');
        $instance->add('installer.install_data.add_bots', 20);
        $instance->add_service_class('installer.install_data.add_languages', 'phpbb\\install\\module\\install_data\\task\\add_languages');
        $instance->add('installer.install_data.add_languages', 10);
        $instance->add_service_class('installer.install_data.add_modules', 'phpbb\\install\\module\\install_data\\task\\add_modules');
        $instance->add('installer.install_data.add_modules', 30);
        $instance->add_service_class('installer.install_data.create_search_index', 'phpbb\\install\\module\\install_data\\task\\create_search_index');
        $instance->add('installer.install_data.create_search_index', 40);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.database_install' shared service.
     *
     * @return \phpbb\install\module\install_database\module
     */
    protected function getInstaller_Module_DatabaseInstallService()
    {
        $this->services['installer.module.database_install'] = $instance = new \phpbb\install\module\install_database\module($this->get('installer.module.install_database_collection'));

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.filesystem_install' shared service.
     *
     * @return \phpbb\install\module\install_filesystem\module
     */
    protected function getInstaller_Module_FilesystemInstallService()
    {
        $this->services['installer.module.filesystem_install'] = $instance = new \phpbb\install\module\install_filesystem\module($this->get('installer.module.install_filesystem_collection'));

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.filesystem_update' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\module
     */
    protected function getInstaller_Module_FilesystemUpdateService()
    {
        $this->services['installer.module.filesystem_update'] = $instance = new \phpbb\install\module\update_filesystem\module($this->get('installer.module.update_filesystem_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.finish_install' shared service.
     *
     * @return \phpbb\install\module\install_finish\module
     */
    protected function getInstaller_Module_FinishInstallService()
    {
        $this->services['installer.module.finish_install'] = $instance = new \phpbb\install\module\install_finish\module($this->get('installer.module.install_finish_collection'));

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.install_database_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_InstallDatabaseCollectionService()
    {
        $this->services['installer.module.install_database_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.install_database.create_schema_file', 'phpbb\\install\\module\\install_database\\task\\create_schema_file');
        $instance->add('installer.install_database.create_schema_file', 10);
        $instance->add_service_class('installer.install_database.set_up_database', 'phpbb\\install\\module\\install_database\\task\\set_up_database');
        $instance->add('installer.install_database.set_up_database', 20);
        $instance->add_service_class('installer.install_database.add_tables', 'phpbb\\install\\module\\install_database\\task\\add_tables');
        $instance->add('installer.install_database.add_tables', 30);
        $instance->add_service_class('installer.install_database.add_default_data', 'phpbb\\install\\module\\install_database\\task\\add_default_data');
        $instance->add('installer.install_database.add_default_data', 40);
        $instance->add_service_class('installer.install_database.add_config_settings', 'phpbb\\install\\module\\install_database\\task\\add_config_settings');
        $instance->add('installer.install_database.add_config_settings', 50);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.install_filesystem_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_InstallFilesystemCollectionService()
    {
        $this->services['installer.module.install_filesystem_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.install_filesystem.create_config_file', 'phpbb\\install\\module\\install_filesystem\\task\\create_config_file');
        $instance->add('installer.install_filesystem.create_config_file', 10);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.install_finish_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_InstallFinishCollectionService()
    {
        $this->services['installer.module.install_finish_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.install_finish.populate_migrations', 'phpbb\\install\\module\\install_finish\\task\\populate_migrations');
        $instance->add('installer.install_finish.populate_migrations', 10);
        $instance->add_service_class('installer.install_finish.install_extensions', 'phpbb\\install\\module\\install_finish\\task\\install_extensions');
        $instance->add('installer.install_finish.install_extensions', 20);
        $instance->add_service_class('installer.install_finish.notify_user', 'phpbb\\install\\module\\install_finish\\task\\notify_user');
        $instance->add('installer.install_finish.notify_user', 30);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.install_obtain_data_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_InstallObtainDataCollectionService()
    {
        $this->services['installer.module.install_obtain_data_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.obtain_data.obtain_admin_data', 'phpbb\\install\\module\\obtain_data\\task\\obtain_admin_data');
        $instance->add('installer.obtain_data.obtain_admin_data', 10);
        $instance->add_service_class('installer.obtain_data.obtain_board_data', 'phpbb\\install\\module\\obtain_data\\task\\obtain_board_data');
        $instance->add('installer.obtain_data.obtain_board_data', 50);
        $instance->add_service_class('installer.obtain_data.obtain_database_data', 'phpbb\\install\\module\\obtain_data\\task\\obtain_database_data');
        $instance->add('installer.obtain_data.obtain_database_data', 20);
        $instance->add_service_class('installer.obtain_data.obtain_email_data', 'phpbb\\install\\module\\obtain_data\\task\\obtain_email_data');
        $instance->add('installer.obtain_data.obtain_email_data', 40);
        $instance->add_service_class('installer.obtain_data.obtain_imagick_path', 'phpbb\\install\\module\\obtain_data\\task\\obtain_imagick_path');
        $instance->add('installer.obtain_data.obtain_imagick_path', 60);
        $instance->add_service_class('installer.obtain_data.obtain_server_data', 'phpbb\\install\\module\\obtain_data\\task\\obtain_server_data');
        $instance->add('installer.obtain_data.obtain_server_data', 30);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.install_requirements_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_InstallRequirementsCollectionService()
    {
        $this->services['installer.module.install_requirements_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.requirements.check_filesystem', 'phpbb\\install\\module\\requirements\\task\\check_filesystem');
        $instance->add('installer.requirements.check_filesystem', 10);
        $instance->add_service_class('installer.requirements.check_server_environment', 'phpbb\\install\\module\\requirements\\task\\check_server_environment');
        $instance->add('installer.requirements.check_server_environment', 20);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.obtain_data_install' shared service.
     *
     * @return \phpbb\install\module\obtain_data\install_module
     */
    protected function getInstaller_Module_ObtainDataInstallService()
    {
        $this->services['installer.module.obtain_data_install'] = $instance = new \phpbb\install\module\obtain_data\install_module($this->get('installer.module.install_obtain_data_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.obtain_data_update' shared service.
     *
     * @return \phpbb\install\module\obtain_data\update_module
     */
    protected function getInstaller_Module_ObtainDataUpdateService()
    {
        $this->services['installer.module.obtain_data_update'] = $instance = new \phpbb\install\module\obtain_data\update_module($this->get('installer.module.update_obtain_data_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.requirements_install' shared service.
     *
     * @return \phpbb\install\module\requirements\install_module
     */
    protected function getInstaller_Module_RequirementsInstallService()
    {
        $this->services['installer.module.requirements_install'] = $instance = new \phpbb\install\module\requirements\install_module($this->get('installer.module.install_requirements_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.requirements_update' shared service.
     *
     * @return \phpbb\install\module\requirements\update_module
     */
    protected function getInstaller_Module_RequirementsUpdateService()
    {
        $this->services['installer.module.requirements_update'] = $instance = new \phpbb\install\module\requirements\update_module($this->get('installer.module.update_requirements_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.update_database' shared service.
     *
     * @return \phpbb\install\module\update_database\module
     */
    protected function getInstaller_Module_UpdateDatabaseService()
    {
        $this->services['installer.module.update_database'] = $instance = new \phpbb\install\module\update_database\module($this->get('installer.module.update_database_collection'), true, false);

        $instance->setup($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));

        return $instance;
    }

    /**
     * Gets the public 'installer.module.update_database_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_UpdateDatabaseCollectionService()
    {
        $this->services['installer.module.update_database_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.update_database.update_task', 'phpbb\\install\\module\\update_database\\task\\update');
        $instance->add('installer.update_database.update_task', 10);
        $instance->add_service_class('installer.update_database.update_extensions', 'phpbb\\install\\module\\update_database\\task\\update_extensions');
        $instance->add('installer.update_database.update_extensions', 20);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.update_filesystem_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_UpdateFilesystemCollectionService()
    {
        $this->services['installer.module.update_filesystem_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.update_filesystem.check_task', 'phpbb\\install\\module\\update_filesystem\\task\\file_check');
        $instance->add('installer.update_filesystem.check_task', 10);
        $instance->add_service_class('installer.update_filesystem.diff_files', 'phpbb\\install\\module\\update_filesystem\\task\\diff_files');
        $instance->add('installer.update_filesystem.diff_files', 20);
        $instance->add_service_class('installer.update_filesystem.show_file_status', 'phpbb\\install\\module\\update_filesystem\\task\\show_file_status');
        $instance->add('installer.update_filesystem.show_file_status', 30);
        $instance->add_service_class('installer.update_filesystem.update_files', 'phpbb\\install\\module\\update_filesystem\\task\\update_files');
        $instance->add('installer.update_filesystem.update_files', 40);
        $instance->add_service_class('installer.update_filesystem.download_updated_files', 'phpbb\\install\\module\\update_filesystem\\task\\download_updated_files');
        $instance->add('installer.update_filesystem.download_updated_files', 50);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.update_obtain_data_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_UpdateObtainDataCollectionService()
    {
        $this->services['installer.module.update_obtain_data_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.obtain_data.update_options', 'phpbb\\install\\module\\obtain_data\\task\\obtain_update_settings');
        $instance->add('installer.obtain_data.update_options', 10);
        $instance->add_service_class('installer.obtain_data.file_updater_method', 'phpbb\\install\\module\\obtain_data\\task\\obtain_file_updater_method');
        $instance->add('installer.obtain_data.file_updater_method', 20);
        $instance->add_service_class('installer.obtain_data.update_files', 'phpbb\\install\\module\\obtain_data\\task\\obtain_update_files');
        $instance->add('installer.obtain_data.update_files', 30);
        $instance->add_service_class('installer.obtain_data.update_ftp_settings', 'phpbb\\install\\module\\obtain_data\\task\\obtain_update_ftp_data');
        $instance->add('installer.obtain_data.update_ftp_settings', 40);

        return $instance;
    }

    /**
     * Gets the public 'installer.module.update_requirements_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Module_UpdateRequirementsCollectionService()
    {
        $this->services['installer.module.update_requirements_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add_service_class('installer.requirements.check_server_environment', 'phpbb\\install\\module\\requirements\\task\\check_server_environment');
        $instance->add('installer.requirements.check_server_environment', 20);
        $instance->add_service_class('installer.requirements.check_filesystem_update', 'phpbb\\install\\module\\requirements\\task\\check_filesystem');
        $instance->add('installer.requirements.check_filesystem_update', 10);
        $instance->add_service_class('installer.requirements.update_requirements', 'phpbb\\install\\module\\requirements\\task\\check_update');
        $instance->add('installer.requirements.update_requirements', 30);

        return $instance;
    }

    /**
     * Gets the public 'installer.navigation.convertor_navigation' service.
     *
     * @return \phpbb\install\helper\navigation\convertor_navigation
     */
    protected function getInstaller_Navigation_ConvertorNavigationService()
    {
        return new \phpbb\install\helper\navigation\convertor_navigation($this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'installer.navigation.install_navigation' service.
     *
     * @return \phpbb\install\helper\navigation\install_navigation
     */
    protected function getInstaller_Navigation_InstallNavigationService()
    {
        return new \phpbb\install\helper\navigation\install_navigation($this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'installer.navigation.main_navigation' service.
     *
     * @return \phpbb\install\helper\navigation\main_navigation
     */
    protected function getInstaller_Navigation_MainNavigationService()
    {
        return new \phpbb\install\helper\navigation\main_navigation();
    }

    /**
     * Gets the public 'installer.navigation.provider' shared service.
     *
     * @return \phpbb\install\helper\navigation\navigation_provider
     */
    protected function getInstaller_Navigation_ProviderService()
    {
        return $this->services['installer.navigation.provider'] = new \phpbb\install\helper\navigation\navigation_provider($this->get('installer.navigation.service_collection'));
    }

    /**
     * Gets the public 'installer.navigation.service_collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getInstaller_Navigation_ServiceCollectionService()
    {
        $this->services['installer.navigation.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('installer.navigation.main_navigation');
        $instance->add('installer.navigation.install_navigation');
        $instance->add('installer.navigation.update_navigation');
        $instance->add('installer.navigation.convertor_navigation');

        return $instance;
    }

    /**
     * Gets the public 'installer.navigation.update_navigation' service.
     *
     * @return \phpbb\install\helper\navigation\update_navigation
     */
    protected function getInstaller_Navigation_UpdateNavigationService()
    {
        return new \phpbb\install\helper\navigation\update_navigation($this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'installer.obtain_data.file_updater_method' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_file_updater_method
     */
    protected function getInstaller_ObtainData_FileUpdaterMethodService()
    {
        return $this->services['installer.obtain_data.file_updater_method'] = new \phpbb\install\module\obtain_data\task\obtain_file_updater_method($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_admin_data' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_admin_data
     */
    protected function getInstaller_ObtainData_ObtainAdminDataService()
    {
        return $this->services['installer.obtain_data.obtain_admin_data'] = new \phpbb\install\module\obtain_data\task\obtain_admin_data($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_board_data' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_board_data
     */
    protected function getInstaller_ObtainData_ObtainBoardDataService()
    {
        return $this->services['installer.obtain_data.obtain_board_data'] = new \phpbb\install\module\obtain_data\task\obtain_board_data($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('language.helper.language_file'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_database_data' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_database_data
     */
    protected function getInstaller_ObtainData_ObtainDatabaseDataService()
    {
        return $this->services['installer.obtain_data.obtain_database_data'] = new \phpbb\install\module\obtain_data\task\obtain_database_data($this->get('installer.helper.database'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_email_data' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_email_data
     */
    protected function getInstaller_ObtainData_ObtainEmailDataService()
    {
        return $this->services['installer.obtain_data.obtain_email_data'] = new \phpbb\install\module\obtain_data\task\obtain_email_data($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_imagick_path' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_imagick_path
     */
    protected function getInstaller_ObtainData_ObtainImagickPathService()
    {
        return $this->services['installer.obtain_data.obtain_imagick_path'] = new \phpbb\install\module\obtain_data\task\obtain_imagick_path($this->get('installer.helper.config'));
    }

    /**
     * Gets the public 'installer.obtain_data.obtain_server_data' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_server_data
     */
    protected function getInstaller_ObtainData_ObtainServerDataService()
    {
        return $this->services['installer.obtain_data.obtain_server_data'] = new \phpbb\install\module\obtain_data\task\obtain_server_data($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.obtain_data.update_files' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_update_files
     */
    protected function getInstaller_ObtainData_UpdateFilesService()
    {
        return $this->services['installer.obtain_data.update_files'] = new \phpbb\install\module\obtain_data\task\obtain_update_files($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), '../', 'php');
    }

    /**
     * Gets the public 'installer.obtain_data.update_ftp_settings' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_update_ftp_data
     */
    protected function getInstaller_ObtainData_UpdateFtpSettingsService()
    {
        return $this->services['installer.obtain_data.update_ftp_settings'] = new \phpbb\install\module\obtain_data\task\obtain_update_ftp_data($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.update_helper'), 'php');
    }

    /**
     * Gets the public 'installer.obtain_data.update_options' shared service.
     *
     * @return \phpbb\install\module\obtain_data\task\obtain_update_settings
     */
    protected function getInstaller_ObtainData_UpdateOptionsService()
    {
        return $this->services['installer.obtain_data.update_options'] = new \phpbb\install\module\obtain_data\task\obtain_update_settings($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.requirements.check_filesystem' shared service.
     *
     * @return \phpbb\install\module\requirements\task\check_filesystem
     */
    protected function getInstaller_Requirements_CheckFilesystemService()
    {
        return $this->services['installer.requirements.check_filesystem'] = new \phpbb\install\module\requirements\task\check_filesystem($this->get('filesystem'), $this->get('installer.helper.iohandler'), '../', 'php');
    }

    /**
     * Gets the public 'installer.requirements.check_filesystem_update' shared service.
     *
     * @return \phpbb\install\module\requirements\task\check_filesystem
     */
    protected function getInstaller_Requirements_CheckFilesystemUpdateService()
    {
        return $this->services['installer.requirements.check_filesystem_update'] = new \phpbb\install\module\requirements\task\check_filesystem($this->get('filesystem'), $this->get('installer.helper.iohandler'), '../', 'php', false);
    }

    /**
     * Gets the public 'installer.requirements.check_server_environment' shared service.
     *
     * @return \phpbb\install\module\requirements\task\check_server_environment
     */
    protected function getInstaller_Requirements_CheckServerEnvironmentService()
    {
        return $this->services['installer.requirements.check_server_environment'] = new \phpbb\install\module\requirements\task\check_server_environment($this->get('installer.helper.database'), $this->get('installer.helper.iohandler'));
    }

    /**
     * Gets the public 'installer.requirements.update_requirements' shared service.
     *
     * @return \phpbb\install\module\requirements\task\check_update
     */
    protected function getInstaller_Requirements_UpdateRequirementsService()
    {
        return $this->services['installer.requirements.update_requirements'] = new \phpbb\install\module\requirements\task\check_update($this->get('installer.helper.container_factory'), $this->get('filesystem'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.update_helper'), '../', 'php');
    }

    /**
     * Gets the public 'installer.update.module_collection' shared service.
     *
     * @return \phpbb\di\ordered_service_collection
     */
    protected function getInstaller_Update_ModuleCollectionService()
    {
        $this->services['installer.update.module_collection'] = $instance = new \phpbb\di\ordered_service_collection($this);

        $instance->add('installer.module.update_database', 40);
        $instance->add('installer.module.filesystem_update', 30);
        $instance->add('installer.module.obtain_data_update', 20);
        $instance->add('installer.module.requirements_update', 10);

        return $instance;
    }

    /**
     * Gets the public 'installer.update_database.update_extensions' shared service.
     *
     * @return \phpbb\install\module\update_database\task\update_extensions
     */
    protected function getInstaller_UpdateDatabase_UpdateExtensionsService()
    {
        return $this->services['installer.update_database.update_extensions'] = new \phpbb\install\module\update_database\task\update_extensions($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.update_helper'), '../');
    }

    /**
     * Gets the public 'installer.update_database.update_task' shared service.
     *
     * @return \phpbb\install\module\update_database\task\update
     */
    protected function getInstaller_UpdateDatabase_UpdateTaskService()
    {
        return $this->services['installer.update_database.update_task'] = new \phpbb\install\module\update_database\task\update($this->get('installer.helper.container_factory'), $this->get('filesystem'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('language'), '../');
    }

    /**
     * Gets the public 'installer.update_filesystem.check_task' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\task\file_check
     */
    protected function getInstaller_UpdateFilesystem_CheckTaskService()
    {
        return $this->services['installer.update_filesystem.check_task'] = new \phpbb\install\module\update_filesystem\task\file_check($this->get('filesystem'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.update_helper'), '../');
    }

    /**
     * Gets the public 'installer.update_filesystem.diff_files' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\task\diff_files
     */
    protected function getInstaller_UpdateFilesystem_DiffFilesService()
    {
        return $this->services['installer.update_filesystem.diff_files'] = new \phpbb\install\module\update_filesystem\task\diff_files($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.helper.update_helper'), '../', 'php');
    }

    /**
     * Gets the public 'installer.update_filesystem.download_updated_files' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\task\download_updated_files
     */
    protected function getInstaller_UpdateFilesystem_DownloadUpdatedFilesService()
    {
        return $this->services['installer.update_filesystem.download_updated_files'] = new \phpbb\install\module\update_filesystem\task\download_updated_files($this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('filesystem'));
    }

    /**
     * Gets the public 'installer.update_filesystem.show_file_status' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\task\show_file_status
     */
    protected function getInstaller_UpdateFilesystem_ShowFileStatusService()
    {
        return $this->services['installer.update_filesystem.show_file_status'] = new \phpbb\install\module\update_filesystem\task\show_file_status($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('filesystem'), $this->get('installer.file_updater.factory'));
    }

    /**
     * Gets the public 'installer.update_filesystem.update_files' shared service.
     *
     * @return \phpbb\install\module\update_filesystem\task\update_files
     */
    protected function getInstaller_UpdateFilesystem_UpdateFilesService()
    {
        return $this->services['installer.update_filesystem.update_files'] = new \phpbb\install\module\update_filesystem\task\update_files($this->get('installer.helper.container_factory'), $this->get('installer.helper.config'), $this->get('installer.helper.iohandler'), $this->get('installer.file_updater.factory'), $this->get('installer.helper.update_helper'), '../');
    }

    /**
     * Gets the public 'kernel_exception_subscriber' shared service.
     *
     * @return \phpbb\install\event\kernel_exception_subscriber
     */
    protected function getKernelExceptionSubscriberService()
    {
        return $this->services['kernel_exception_subscriber'] = new \phpbb\install\event\kernel_exception_subscriber($this->get('phpbb.installer.controller.helper'), $this->get('language'), $this->get('template'));
    }

    /**
     * Gets the public 'kernel_terminate_subscriber' shared service.
     *
     * @return \phpbb\event\kernel_terminate_subscriber
     */
    protected function getKernelTerminateSubscriberService()
    {
        return $this->services['kernel_terminate_subscriber'] = new \phpbb\event\kernel_terminate_subscriber();
    }

    /**
     * Gets the public 'language' shared service.
     *
     * @return \phpbb\language\language
     */
    protected function getLanguageService()
    {
        return $this->services['language'] = new \phpbb\language\language($this->get('language.loader'));
    }

    /**
     * Gets the public 'language.helper.language_file' shared service.
     *
     * @return \phpbb\language\language_file_helper
     */
    protected function getLanguage_Helper_LanguageFileService()
    {
        return $this->services['language.helper.language_file'] = new \phpbb\language\language_file_helper('../');
    }

    /**
     * Gets the public 'language.loader' shared service.
     *
     * @return \phpbb\language\language_file_loader
     */
    protected function getLanguage_LoaderService()
    {
        return $this->services['language.loader'] = new \phpbb\language\language_file_loader('../', 'php');
    }

    /**
     * Gets the public 'path_helper' shared service.
     *
     * @return \phpbb\path_helper
     */
    protected function getPathHelperService()
    {
        return $this->services['path_helper'] = new \phpbb\path_helper($this->get('symfony_request'), $this->get('filesystem'), $this->get('request'), '../', 'php');
    }

    /**
     * Gets the public 'php_ini' shared service.
     *
     * @return \bantu\IniGetWrapper\IniGetWrapper
     */
    protected function getPhpIniService()
    {
        return $this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper();
    }

    /**
     * Gets the public 'phpbb.installer.controller.convert' shared service.
     *
     * @return \phpbb\convert\controller\convertor
     */
    protected function getPhpbb_Installer_Controller_ConvertService()
    {
        return $this->services['phpbb.installer.controller.convert'] = new \phpbb\convert\controller\convertor($this->get('cache.driver'), $this->get('installer.helper.container_factory'), $this->get('installer.helper.database'), $this->get('phpbb.installer.controller.helper'), $this->get('installer.helper.install_helper'), $this->get('installer.helper.iohandler_factory'), $this->get('language'), $this->get('installer.navigation.provider'), $this->get('request'), $this->get('template'), '../', 'php');
    }

    /**
     * Gets the public 'phpbb.installer.controller.file_downloader' shared service.
     *
     * @return \phpbb\install\controller\archive_download
     */
    protected function getPhpbb_Installer_Controller_FileDownloaderService()
    {
        return $this->services['phpbb.installer.controller.file_downloader'] = new \phpbb\install\controller\archive_download($this->get('installer.helper.config'));
    }

    /**
     * Gets the public 'phpbb.installer.controller.helper' shared service.
     *
     * @return \phpbb\install\controller\helper
     */
    protected function getPhpbb_Installer_Controller_HelperService()
    {
        return $this->services['phpbb.installer.controller.helper'] = new \phpbb\install\controller\helper($this->get('installer.helper.config'), $this->get('language'), $this->get('language.helper.language_file'), $this->get('installer.navigation.provider'), $this->get('template'), $this->get('path_helper'), $this->get('request'), $this->get('symfony_request'), $this->get('router'), '../');
    }

    /**
     * Gets the public 'phpbb.installer.controller.install' shared service.
     *
     * @return \phpbb\install\controller\install
     */
    protected function getPhpbb_Installer_Controller_InstallService()
    {
        return $this->services['phpbb.installer.controller.install'] = new \phpbb\install\controller\install($this->get('phpbb.installer.controller.helper'), $this->get('installer.helper.iohandler_factory'), $this->get('installer.navigation.provider'), $this->get('language'), $this->get('template'), $this->get('request'), $this->get('installer.installer.install'), $this->get('installer.helper.install_helper'));
    }

    /**
     * Gets the public 'phpbb.installer.controller.status' shared service.
     *
     * @return \phpbb\install\controller\timeout_check
     */
    protected function getPhpbb_Installer_Controller_StatusService()
    {
        return $this->services['phpbb.installer.controller.status'] = new \phpbb\install\controller\timeout_check($this->get('phpbb.installer.controller.helper'), '../');
    }

    /**
     * Gets the public 'phpbb.installer.controller.update' shared service.
     *
     * @return \phpbb\install\controller\update
     */
    protected function getPhpbb_Installer_Controller_UpdateService()
    {
        return $this->services['phpbb.installer.controller.update'] = new \phpbb\install\controller\update($this->get('phpbb.installer.controller.helper'), $this->get('installer.installer.update'), $this->get('installer.helper.install_helper'), $this->get('installer.helper.iohandler_factory'), $this->get('language'), $this->get('installer.navigation.provider'), $this->get('request'), $this->get('template'));
    }

    /**
     * Gets the public 'phpbb.installer.controller.welcome' shared service.
     *
     * @return \phpbb\install\controller\installer_index
     */
    protected function getPhpbb_Installer_Controller_WelcomeService()
    {
        return $this->services['phpbb.installer.controller.welcome'] = new \phpbb\install\controller\installer_index($this->get('phpbb.installer.controller.helper'), $this->get('language'), $this->get('template'), '../');
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @return \phpbb\request\request
     */
    protected function getRequestService()
    {
        return $this->services['request'] = new \phpbb\request\request(NULL, true);
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \phpbb\routing\router
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \phpbb\routing\router($this, $this->get('routing.chained_resources_locator'), $this->get('routing.delegated_loader'), 'php', '../cache/installer/');
    }

    /**
     * Gets the public 'router.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouter_ListenerService()
    {
        return $this->services['router.listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), NULL, NULL, $this->get('request_stack'));
    }

    /**
     * Gets the public 'routing.chained_resources_locator' shared service.
     *
     * @return \phpbb\routing\resources_locator\chained_resources_locator
     */
    protected function getRouting_ChainedResourcesLocatorService()
    {
        return $this->services['routing.chained_resources_locator'] = new \phpbb\routing\resources_locator\chained_resources_locator($this->get('routing.resources_locator.collection'));
    }

    /**
     * Gets the public 'routing.delegated_loader' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getRouting_DelegatedLoaderService()
    {
        return $this->services['routing.delegated_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader($this->get('routing.resolver'));
    }

    /**
     * Gets the public 'routing.helper' shared service.
     *
     * @return \phpbb\routing\helper
     */
    protected function getRouting_HelperService()
    {
        return $this->services['routing.helper'] = new \phpbb\routing\helper($this->get('config'), $this->get('router'), $this->get('symfony_request'), $this->get('request'), $this->get('filesystem'), '../', 'php');
    }

    /**
     * Gets the public 'routing.loader.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_Loader_CollectionService()
    {
        $this->services['routing.loader.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.loader.yaml');

        return $instance;
    }

    /**
     * Gets the public 'routing.loader.yaml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YamlService()
    {
        return $this->services['routing.loader.yaml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader($this->get('file_locator'));
    }

    /**
     * Gets the public 'routing.resolver' shared service.
     *
     * @return \phpbb\routing\loader_resolver
     */
    protected function getRouting_ResolverService()
    {
        return $this->services['routing.resolver'] = new \phpbb\routing\loader_resolver($this->get('routing.loader.collection'));
    }

    /**
     * Gets the public 'routing.resources_locator.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getRouting_ResourcesLocator_CollectionService()
    {
        $this->services['routing.resources_locator.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('routing.resources_locator.default');

        return $instance;
    }

    /**
     * Gets the public 'routing.resources_locator.default' shared service.
     *
     * @return \phpbb\routing\resources_locator\installer_resources_locator
     */
    protected function getRouting_ResourcesLocator_DefaultService()
    {
        return $this->services['routing.resources_locator.default'] = new \phpbb\routing\resources_locator\installer_resources_locator($this->get('filesystem'), '../', 'installer');
    }

    /**
     * Gets the public 'symfony_request' shared service.
     *
     * @return \phpbb\symfony_request
     */
    protected function getSymfonyRequestService()
    {
        return $this->services['symfony_request'] = new \phpbb\symfony_request($this->get('request'));
    }

    /**
     * Gets the public 'symfony_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getSymfonyResponseListenerService()
    {
        return $this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'template' shared service.
     *
     * @return \phpbb\template\twig\twig
     */
    protected function getTemplateService()
    {
        return $this->services['template'] = new \phpbb\template\twig\twig($this->get('path_helper'), $this->get('config'), $this->get('template_context'), $this->get('template.twig.environment'), '../cache/installer/twig/', NULL, $this->get('template.twig.extensions.collection'));
    }

    /**
     * Gets the public 'template.twig.environment' shared service.
     *
     * @return \phpbb\template\twig\environment
     */
    protected function getTemplate_Twig_EnvironmentService()
    {
        $this->services['template.twig.environment'] = $instance = new \phpbb\template\twig\environment($this->get('config'), $this->get('filesystem'), $this->get('path_helper'), '../cache/installer/twig/', NULL, $this->get('template.twig.loader'), NULL, array());

        $instance->setLexer($this->get('template.twig.lexer'));

        return $instance;
    }

    /**
     * Gets the public 'template.twig.extensions.collection' shared service.
     *
     * @return \phpbb\di\service_collection
     */
    protected function getTemplate_Twig_Extensions_CollectionService()
    {
        $this->services['template.twig.extensions.collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('template.twig.extensions.phpbb');
        $instance->add('template.twig.extensions.routing');

        return $instance;
    }

    /**
     * Gets the public 'template.twig.extensions.debug' shared service.
     *
     * @return \Twig_Extension_Debug
     */
    protected function getTemplate_Twig_Extensions_DebugService()
    {
        return $this->services['template.twig.extensions.debug'] = new \Twig_Extension_Debug();
    }

    /**
     * Gets the public 'template.twig.extensions.phpbb' shared service.
     *
     * @return \phpbb\template\twig\extension
     */
    protected function getTemplate_Twig_Extensions_PhpbbService()
    {
        return $this->services['template.twig.extensions.phpbb'] = new \phpbb\template\twig\extension($this->get('template_context'), $this->get('language'));
    }

    /**
     * Gets the public 'template.twig.extensions.routing' shared service.
     *
     * @return \phpbb\template\twig\extension\routing
     */
    protected function getTemplate_Twig_Extensions_RoutingService()
    {
        return $this->services['template.twig.extensions.routing'] = new \phpbb\template\twig\extension\routing($this->get('routing.helper'));
    }

    /**
     * Gets the public 'template.twig.lexer' shared service.
     *
     * @return \phpbb\template\twig\lexer
     */
    public function getTemplate_Twig_LexerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['template.twig.lexer'] = new phpbbtemplatetwiglexer_000000003e4f4bb70000000048fc034e(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getTemplate_Twig_LexerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \phpbb\template\twig\lexer($this->get('template.twig.environment'));
    }

    /**
     * Gets the public 'template.twig.loader' shared service.
     *
     * @return \phpbb\template\twig\loader
     */
    protected function getTemplate_Twig_LoaderService()
    {
        return $this->services['template.twig.loader'] = new \phpbb\template\twig\loader($this->get('filesystem'));
    }

    /**
     * Gets the public 'template_context' shared service.
     *
     * @return \phpbb\template\context
     */
    protected function getTemplateContextService()
    {
        return $this->services['template_context'] = new \phpbb\template\context();
    }

    /**
     * Gets the public 'user' shared service.
     *
     * @return \phpbb\user
     */
    protected function getUserService()
    {
        return $this->services['user'] = new \phpbb\user($this->get('language'), '\\phpbb\\datetime');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'core.root_path' => '../',
            'core.php_ext' => 'php',
            'core.environment' => 'installer',
            'core.debug' => false,
            'core.cache_dir' => '../cache/installer/',
            'cache.driver.class' => 'phpbb\\cache\\driver\\file',
            'core.template.cache_path' => '../cache/installer/twig/',
            'core.disable_super_globals' => true,
            'datetime.class' => '\\phpbb\\datetime',
            'mimetype.guesser.priority.lowest' => -2,
            'mimetype.guesser.priority.low' => -1,
            'mimetype.guesser.priority.default' => 0,
            'mimetype.guesser.priority.high' => 1,
            'mimetype.guesser.priority.highest' => 2,
            'passwords.algorithms' => array(
                0 => 'passwords.driver.bcrypt_2y',
                1 => 'passwords.driver.bcrypt',
                2 => 'passwords.driver.salted_md5',
                3 => 'passwords.driver.phpass',
            ),
            'installer.create_config_file.options' => array(

            ),
            'debug.exceptions' => false,
        );
    }
}

class phpbbtemplatetwiglexer_000000003e4f4bb70000000048fc034e extends \phpbb\template\twig\lexer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder618b3812c47e2180556154 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer618b3812c47e6075425154 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties618b3812c47d1683636250 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function set_environment(\Twig_Environment $env)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, 'set_environment', array('env' => $env), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        return $this->valueHolder618b3812c47e2180556154->set_environment($env);
    }

    /**
     * {@inheritDoc}
     */
    public function tokenize($code, $filename = null)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, 'tokenize', array('code' => $code, 'filename' => $filename), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        return $this->valueHolder618b3812c47e2180556154->tokenize($code, $filename);
    }

    /**
     * {@inheritDoc}
     */
    public function fix_begin_tokens($code, $parent_nodes = array())
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, 'fix_begin_tokens', array('code' => $code, 'parent_nodes' => $parent_nodes), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        return $this->valueHolder618b3812c47e2180556154->fix_begin_tokens($code, $parent_nodes);
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer618b3812c47e6075425154 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__get', array('name' => $name), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        if (isset(self::$publicProperties618b3812c47d1683636250[$name])) {
            return $this->valueHolder618b3812c47e2180556154->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder618b3812c47e2180556154;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder618b3812c47e2180556154;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder618b3812c47e2180556154;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder618b3812c47e2180556154;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__isset', array('name' => $name), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder618b3812c47e2180556154;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder618b3812c47e2180556154;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__unset', array('name' => $name), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder618b3812c47e2180556154;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder618b3812c47e2180556154;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__clone', array(), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        $this->valueHolder618b3812c47e2180556154 = clone $this->valueHolder618b3812c47e2180556154;
    }

    public function __sleep()
    {
        $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, '__sleep', array(), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;

        return array('valueHolder618b3812c47e2180556154');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer618b3812c47e6075425154 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer618b3812c47e6075425154;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer618b3812c47e6075425154 && ($this->initializer618b3812c47e6075425154->__invoke($valueHolder618b3812c47e2180556154, $this, 'initializeProxy', array(), $this->initializer618b3812c47e6075425154) || 1) && $this->valueHolder618b3812c47e2180556154 = $valueHolder618b3812c47e2180556154;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder618b3812c47e2180556154;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder618b3812c47e2180556154;
    }


}
