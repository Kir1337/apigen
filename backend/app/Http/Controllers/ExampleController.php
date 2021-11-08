<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;

define('BASE_PATH', dirname(__DIR__));
define('MODELS_PATH', BASE_PATH . '/Models');

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test(Request $request)
    {
        usleep(300);
        $test = $request->input('test');

        $class = new PhpClass();
        $class
            ->setQualifiedName('my\\cool\\Tool')
            ->setMethod(
                PhpMethod::create('__construct')
                    ->addParameter(
                        PhpParameter::create('target')
                            ->setType('string')
                            ->setDescription('Creates my Tool')
                    )
            );

        $filename = MODELS_PATH . "/tool.php";
        $generator = new CodeGenerator();
        $code = $generator->generate($class);

        file_put_contents(
            $filename,
            "<?php\n\n" . $code
        );

        return response()->json(['filename' => $filename, 'code' => "<?php\n\n" . $code]);
    }
}
