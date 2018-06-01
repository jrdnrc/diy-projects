<?php declare(strict_types=1);

namespace App\Http\Controllers\Projects;

use App\Project;
use Illuminate\Http\Request;

/**
 * Class StartProjectController
 *
 * @author Jordan Crocker <jordan@jcrocker.uk>
 */
final class StartProjectController
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $user = $request->user();

        $params = array_merge($request->request->all(), ['user_id' => $user->id]);

        return response()->json(Project::create($params)->toArray());
    }
}
