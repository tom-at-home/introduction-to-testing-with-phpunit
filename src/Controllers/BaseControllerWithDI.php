<?php
namespace Acme\Controllers;

use Acme\Interfaces\ControllerInterface;
use duncan3dc\Laravel\BladeInstance;
use Kunststube\CSRFP\SignatureGenerator;
use Acme\Http\Response;
use Acme\Http\Request;
use Acme\Http\Session;

/**
 * Class BaseController
 * @package Acme\Controllers
 */
class BaseControllerWithDI implements ControllerInterface {

    /**
     * @var BladeInstance
     */
    protected $blade;

    /**
     * @var SignatureGenerator
     */
    protected $signer;

    /**
     * @var Response
     */
    public $response;

    /**
     * @var Request
     */
    public $request;


    /**
     * @param Request $request
     * @param Response $response
     * @param Session $session
     * @param SignatureGenerator $signer
     * @param BladeInstance $blade
     * @param string $type
     */
    public function __construct(Request $request, Response $response,
                                Session $session, SignatureGenerator $signer,
                                BladeInstance $blade, $type = "text/html")
    {
        $this->signer = $signer;
        $this->blade = $blade;
        $this->request = $request;
        $this->response = $response;
        $this->session = $session;
    }

}
