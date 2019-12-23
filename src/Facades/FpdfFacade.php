<?php
/**
 * Created by PhpStorm.
 * User: Farhan
 * Date: 10/21/2019
 * Time: 12:46 AM
 *
 * Changed by checkitsedo.
 * Date: 12/23/2019
 * Time: 08:46 PM
 */

namespace Checkitsedo\Fpdf\Facades;

use Checkitsedo\Fpdf\Fpdf\FPDF;
use Illuminate\Support\Facades\Facade;

class FpdfFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FPDF::class;
    }
}
