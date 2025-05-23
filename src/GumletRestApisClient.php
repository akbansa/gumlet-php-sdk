<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use GumletRestApisLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use GumletRestApisLib\Authentication\CustomHeaderAuthenticationManager;
use GumletRestApisLib\Controllers\APIEndpointsController;
use GumletRestApisLib\Proxy\ProxyConfigurationBuilder;
use GumletRestApisLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class GumletRestApisClient implements ConfigurationInterface
{
    private $aPIEndpoints;

    private $customHeaderAuthenticationManager;

    private $proxyConfiguration;

    private $config;

    private $client;

    /**
     * @see GumletRestApisClientBuilder::init()
     * @see GumletRestApisClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->customHeaderAuthenticationManager = new CustomHeaderAuthenticationManager($this->config);
        $this->proxyConfiguration = $this->config['proxyConfiguration'] ?? ConfigurationDefaults::PROXY_CONFIGURATION;
        $this->client = ClientBuilder::init(
            new HttpClient(Configuration::init($this)->proxyConfiguration($this->proxyConfiguration))
        )
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['sec0' => $this->customHeaderAuthenticationManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return GumletRestApisClientBuilder GumletRestApisClientBuilder instance
     */
    public function toBuilder(): GumletRestApisClientBuilder
    {
        $builder = GumletRestApisClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null)
            ->proxyConfiguration($this->getProxyConfigurationBuilder());

        $customHeaderAuthentication = $this->getCustomHeaderAuthenticationCredentialsBuilder();
        if ($customHeaderAuthentication != null) {
            $builder->customHeaderAuthenticationCredentials($customHeaderAuthentication);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getCustomHeaderAuthenticationCredentials(): CustomHeaderAuthenticationCredentials
    {
        return $this->customHeaderAuthenticationManager;
    }

    public function getCustomHeaderAuthenticationCredentialsBuilder(): ?CustomHeaderAuthenticationCredentialsBuilder
    {
        if (empty($this->customHeaderAuthenticationManager->getAuthorization())) {
            return null;
        }
        return CustomHeaderAuthenticationCredentialsBuilder::init(
            $this->customHeaderAuthenticationManager->getAuthorization()
        );
    }

    /**
     * Get the proxy configuration builder
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder
    {
        return ProxyConfigurationBuilder::init($this->proxyConfiguration['address'])
            ->port($this->proxyConfiguration['port'])
            ->tunnel($this->proxyConfiguration['tunnel'])
            ->auth($this->proxyConfiguration['auth']['user'], $this->proxyConfiguration['auth']['pass'])
            ->authMethod($this->proxyConfiguration['auth']['method']);
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see GumletRestApisClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see GumletRestApisClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns API Endpoints Controller
     */
    public function getAPIEndpointsController(): APIEndpointsController
    {
        if ($this->aPIEndpoints == null) {
            $this->aPIEndpoints = new APIEndpointsController($this->client);
        }
        return $this->aPIEndpoints;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [Environment::PRODUCTION => [Server::DEFAULT_ => 'https://api.gumlet.com/v1']];
}
