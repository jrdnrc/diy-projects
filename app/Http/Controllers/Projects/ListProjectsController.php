<?php declare(strict_types=1);

namespace App\Http\Controllers\Projects;

use App\Project;
use Illuminate\Http\Request;

/**
 * Class ListProjectsController
 *
 * @author Jordan Crocker <jordan@jcrocker.uk>
 */
final class ListProjectsController
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        if ($request->user()) {
            return response()->json(Project::whereUserId($request->user()->id)->get()->toArray());
        }

        return response()->json(Project::get()->toArray());
    }
}
