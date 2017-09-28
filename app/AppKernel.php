<?php
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
class AppKernel extends Kernel
{
	public function registerBundles()
	{
		$bundles = array(
				new Symfony\Bundle\FrameworkBundle\FrameworkBundle (),
				new Symfony\Bundle\SecurityBundle\SecurityBundle (),
				new Symfony\Bundle\TwigBundle\TwigBundle (),
				new Symfony\Bundle\MonologBundle\MonologBundle (),
				new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle (),
				new Doctrine\Bundle\DoctrineBundle\DoctrineBundle (),
				new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle (),

				// These are the other bundles the SonataAdminBundle relies on
				new Sonata\CoreBundle\SonataCoreBundle (),
				new Sonata\BlockBundle\SonataBlockBundle (),
				new Knp\Bundle\MenuBundle\KnpMenuBundle (),
					
				// And finally, the storage and SonataAdminBundle
				new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle (),
				new Sonata\AdminBundle\SonataAdminBundle (),
				new Sonata\CacheBundle\SonataCacheBundle (),
				new Sonata\SeoBundle\SonataSeoBundle (),
				new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle (),
				new Sonata\NotificationBundle\SonataNotificationBundle (),
				new Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle (),
				new Sonata\PageBundle\SonataPageBundle (),
				new Application\Sonata\PageBundle\ApplicationSonataPageBundle (),
				new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle (),
				new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle (),
				new Ivory\CKEditorBundle\IvoryCKEditorBundle (),
				new Sonata\FormatterBundle\SonataFormatterBundle (),
					
				//new AppBundle\AppBundle(),
				new FrontOfficeBundle\FrontOfficeBundle (),
				new BackOfficeBundle\BackOfficeBundle (),
					
				//UserBundle
				new FOS\UserBundle\FOSUserBundle (),
				new Sonata\UserBundle\SonataUserBundle (),
				new Application\Sonata\UserBundle\ApplicationSonataUserBundle (),
					
				//MediaBundle
				new Sonata\MediaBundle\SonataMediaBundle (),
				new JMS\SerializerBundle\JMSSerializerBundle (),
				new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle (),
				new Application\Sonata\AdminBundle\ApplicationSonataAdminBundle (),
				
				//FixturesBundle
				new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
				
				new Symfony\Bundle\AsseticBundle\AsseticBundle()
		);
		
		if (in_array ( $this->getEnvironment (), array (
				'dev',
				'test' 
		), true )) {
			$bundles [] = new Symfony\Bundle\DebugBundle\DebugBundle ();
			$bundles [] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle ();
			$bundles [] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle ();
			$bundles [] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle ();
		}
		
		return $bundles;
	}
	public function registerContainerConfiguration(LoaderInterface $loader) {
		$loader->load ( $this->getRootDir () . '/config/config_' . $this->getEnvironment () . '.yml' );
	}
}
