<?php

namespace Rapid\Http\Controllers;

use Rapid\Wink;

class SPAViewController
{
    /**
     * Single page application catch-all route.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('wink::layout', [
            'winkScriptVariables' => Wink::scriptVariables(),
        ]);
    }
}
