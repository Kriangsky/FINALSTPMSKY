<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class AdminController extends Controller
{
    public function lists(Request $request)
    {
        $teams = Team::with('leaderDetail');
        if ($keyword = $request->get('keyword')) {
            $teams = $teams->where('name', 'like', "%$keyword%");
        }
        $teams = $teams->get();
        $tableData = [];
        $thirdColumn = '';
        if ($category = $request->get('category')) {
            switch ($category) {
                case 'cv':
                    $thirdColumn = 'cv';
                    break;
                case 'binusian':
                    $thirdColumn = 'binusian';
                    break;
                case 'non-binusian':
                    $thirdColumn = 'non-binusian';
                    break;
            }
        }
        foreach ($teams as $team) {
            $tableData[] = [
                'team_id' => $team->team_id,
                'team_name' => $team->name,
                'leader_name' => $team->leaderDetail->name,
                'third_column' => $thirdColumn == 'cv' ? $team->leaderDetail->cv : ($thirdColumn == 'binusian' ? ($team->leaderDetail->flazz_card) : ($thirdColumn == 'non-binusian' ? ($team->leaderDetail->id_card) : $team->leaderDetail->whatsapp)),
            ];
        }

        return view('admin.home', compact(['tableData']));
    }
}
