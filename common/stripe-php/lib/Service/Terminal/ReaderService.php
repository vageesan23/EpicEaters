<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Terminal;

class ReaderService extends \Stripe\Service\AbstractService
{
    /**
     * Returns a list of <code>Reader</code> objects.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Collection
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/terminal/readers', $params, $opts);
    }

    /**
     * Creates a new <code>Reader</code> object.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Terminal\Reader
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/terminal/readers', $params, $opts);
    }

    /**
     * Deletes a <code>Reader</code> object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Terminal\Reader
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function delete($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/terminal/readers/%s', $id), $params, $opts);
    }

    /**
     * Retrieves a <code>Reader</code> object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Terminal\Reader
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/terminal/readers/%s', $id), $params, $opts);
    }

    /**
     * Updates a <code>Reader</code> object by setting the values of the parameters
     * passed. Any parameters not provided will be left unchanged.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Terminal\Reader
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/terminal/readers/%s', $id), $params, $opts);
    }
}
