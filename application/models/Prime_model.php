<?php
class Prime_model extends CI_Model {
    public function get_data($table_name, $id_name = FALSE, $id = FALSE) {
        if ($id_name) {
            $query = $this->db->where($id_name, $id);
        }
        $query = $this->db->get($table_name);
        return $query->result_array();
    }

    public function get_players($table_name,$team){
        $this->db->select('reg1,reg2,reg3');
        $this->db->where('department_name', $team);
        $query = $this->db->get($table_name);
        return $query->result_array();
    }


    public function get_playername($id){
        $this->db->select('name');
        $this->db->where('id', $id);
        $query = $this->db->get('individual_player');
        return $query->result_array();
    }

    public function get_playerTeam($id){
        $this->db->select('dept');
        $this->db->where('id', $id);
        $query = $this->db->get('individual_player');
        return $query->result_array();
    }


    public function insertValue($team1,$team2,$toss,$batting){
        $data = array(
            'team1' => $team1,
            'team2' => $team2,
            'toss' => $toss,
            'batting' =>$batting,
            'team1_total' => 0,
            'team2_total' => 0

        );

        $this->db->insert('temp', $data);
    }

    public function insertValue2($arr,$temp,$id){

        //echo $arr[0]['player1'];
        //$id = $this->db->select('id')->order_by('id','desc')->limit(1)->get('temp')->row('id');

        $data = array(

            'match_id' => $id,
            'player_id' => $temp[0]['reg1'],
            'player1' => $arr[0][0]['name'],
            'ball_played' => 0,
            'run_scored' => 0,
            'fours' => 0,
            'sixes' => 0,
            'ball_bowled' =>0,
            'runs_given' =>0,
            'wickets' =>0,
            'maiden' =>0
        );
        $this->db->insert('temp_players',$data);

        //print_r($data);
        $data['player_id'] = $temp[0]['reg2'];
        $data['player1'] = $arr[1][0]['name'];
        $this->db->insert('temp_players',$data);
        //print_r($data);
        $data['player_id'] = $temp[0]['reg3'];
        $data['player1'] = $arr[2][0]['name'];
        $this->db->insert('temp_players',$data);

        $data['player_id'] = $temp[1]['reg1'];
        $data['player1'] = $arr[3][0]['name'];
        $this->db->insert('temp_players',$data);

        $data['player_id'] = $temp[1]['reg2'];
        $data['player1'] = $arr[4][0]['name'];
        $this->db->insert('temp_players',$data);

        $data['player_id'] = $temp[1]['reg3'];
        $data['player1'] = $arr[5][0]['name'];
        $this->db->insert('temp_players',$data);


    }


    public function retriveValue(){
        return $this->db->select('*')->order_by('id','desc')->limit(1)->get('temp')->result_array();
//        $query = $this->db->query("SELECT * from temp");
//        return $query->result_array();
    }


    public function showPreviousMatch(){
        return $this->db->select('*')->order_by('id','desc')->get('temp')->result_array();
    }


    public function retrivePlayerInfo($match_id){
        $this->db->select('*');
        $this->db->where('match_id', $match_id);
        $query = $this->db->get('temp_players');
        return $query->result_array();
    }

    public function retriveTeams(){
        $this->db->select('*');
        $query = $this->db->get('departments');
        //print_r($query->result_array());
        return $query->result_array();
    }



    public function retrivePlayerInfoByTeam($match_id,$team){
        $this->db->select('*');
        $this->db->where('department_name', $team);
        $query = $this->db->get('sport_participation');
        $arr1 = $query->result_array();

        $this->db->select('*');
        $this->db->where('match_id', $match_id);
        $this->db->where_in('player_id', $arr1[0]);
        $query = $this->db->get('temp_players');
        return $query->result_array();
    }


    public function updateValue($player_id,$type,$value){
        $this->db->select('*');
        $this->db->where('player_id',$player_id);
        $query = $this->db->get('temp_players');
        $arr = $query->result_array();
        $data = "";
        if($type=="bat"){
            if(strcmp($value,"w")!=0 && strcmp($value,"nb")!=0 && strcmp($value,"wd")!=0) {
                $this->db->set('run_scored', 'run_scored + ' . (int)$value, FALSE);
                $this->db->set('ball_played', 'ball_played + 1', FALSE);
                $this->db->where('player_id', $player_id);
                $this->db->update('temp_players');
            }

            if (strcmp($value,"w")==0){
                $this->db->set('ball_played', 'ball_played + 1', FALSE);
                $this->db->where('player_id', $player_id);
                $this->db->update('temp_players');
            }




            if ($value == 4) {
                $this->db->set('fours', 'fours + 1', FALSE);
                $this->db->where('player_id',$player_id);
                $this->db->update('temp_players');
            }
            if ($value == 6) {
                $this->db->set('sixes', 'sixes + 1', FALSE);
                $this->db->where('player_id',$player_id);
                $this->db->update('temp_players');
            }
        }

        else{
            if(strcmp($value,"nb")!=0 && strcmp($value,"wd")!=0){
                $this->db->set('ball_bowled', 'ball_bowled + 1', FALSE);
                $this->db->set('runs_given', 'runs_given + ' . (int)$value, FALSE);
                $this->db->where('player_id', $player_id);
                $this->db->update('temp_players');
            }

            if(strcmp($value,"nb")==0 || strcmp($value,"wd")==0){
                $this->db->set('runs_given', 'runs_given + 1', FALSE);
                $this->db->where('player_id', $player_id);
                $this->db->update('temp_players');
            }

            if(strcmp($value,"w")==0){
                $this->db->set('wickets', 'wickets + 1', FALSE);
                $this->db->where('player_id', $player_id);
                $this->db->update('temp_players');
            }
        }



//            if ($type == 'bat') {
//                $data = array(
//                    'player1' => $arr[0]['player1'],
//                'run_scored' => $arr[0]['run_scored'] + (int)$value,
//                'ball_played' => $arr[0]['ball_played'] + 1,
//                'fours' => $arr[0]['fours'],
//                'sixes' => $arr[0]['sixes'],
//                'ball_bowled' => $arr[0]['ball_bowled'],
//                'runs_given' => $arr[0]['runs_given'],
//                'wickets' => $arr[0]['wickets'],
//                'maiden' => $arr[0]['maiden']
//            );
//            if ($value == 4) $data['fours'] += 1;
//            if ($value == 6) $data['sixes'] += 1;
//        } else {
//                $data = array(
//                    'player1' => $arr[0]['player1'],
//                    'run_scored' => $arr[0]['run_scored'],
//                    'ball_played' => $arr[0]['ball_played'] ,
//                    'fours' => $arr[0]['fours'],
//                    'sixes' => $arr[0]['sixes'],
//                    'ball_bowled' => $arr[0]['ball_bowled']+1,
//                    'runs_given' => $arr[0]['runs_given'] + (int)$value,
//                    'wickets' => $arr[0]['wickets'],
//                    'maiden' => $arr[0]['maiden']
//                );
//            }
//
//
//
//        $this->db->where('player1',$player_name);
//        $this->db->update('temp_players',$data);

    }

    public function updateCareer($arr){

        for($i=0; $i<6; $i++) {
            $this->db->set('match_played', 'match_played + 1', FALSE);
            $this->db->set('runs','runs + ' .(int)$arr[$i]['run_scored'],FALSE);
            $this->db->set('balls','balls + ' .(int)$arr[$i]['ball_played'],FALSE);
            $this->db->set('fours','fours + ' .(int)$arr[$i]['fours'],FALSE);
            $this->db->set('sixes','sixes + ' .(int)$arr[$i]['sixes'],FALSE);
            $this->db->set('ball_bowled','ball_bowled + ' .(int)$arr[$i]['ball_bowled'],FALSE);
            $this->db->set('wicket','wicket + ' .(int)$arr[$i]['wickets'],FALSE);
            $this->db->set('run_given','run_given + ' .(int)$arr[$i]['runs_given'],FALSE);
            $this->db->where('id', $arr[$i]['player_id']);
            $this->db->update('individual_player');
        }


    }
    public function updateDepartmentStats(){
        $arr = $this->db->select('*')->order_by('id','desc')->limit(1)->get('temp')->result_array();
        $this->db->where('department_name', $arr[0]['team1']);
        $this->db->set('match_played', 'match_played +1', FALSE);
        $this->db->update('departments');

        $this->db->where('department_name', $arr[0]['team2']);
        $this->db->set('match_played', 'match_played +1', FALSE);
        $this->db->update('departments');

        if($arr[0]['team1_total']>$arr[0]['team2_total']) {
            $this->db->where('department_name', $arr[0]['team1']);
            $this->db->set('wins', 'wins +1', FALSE);
            $this->db->update('departments');

            $this->db->where('department_name', $arr[0]['team2']);
            $this->db->set('loses', 'loses +1', FALSE);
            $this->db->update('departments');
        }

        else{
            $this->db->where('department_name', $arr[0]['team1']);
            $this->db->set('loses', 'loses +1', FALSE);
            $this->db->update('departments');

            $this->db->where('department_name', $arr[0]['team2']);
            $this->db->set('wins', 'wins +1', FALSE);
            $this->db->update('departments');
        }
    }

    public function team_total($value,$team){
        $arr = $this->db->select('*')->order_by('id','desc')->limit(1)->get('temp')->result_array();
        if(strcmp($value,"nb")!=0 && strcmp($value,"wd")!=0 && strcmp($value,"w")!=0) {
            $this->db->where('team1', $team);
            $this->db->where('id', $arr[0]['id']);
            $this->db->set('team1_total', 'team1_total +' . (int)$value, FALSE);
            $this->db->update('temp');

            $this->db->where('id', $arr[0]['id']);
            $this->db->where('team2', $team);
            $this->db->set('team2_total', 'team2_total +' . (int)$value, FALSE);
            $this->db->update('temp');
        }

        if(strcmp($value,"nb")==0||strcmp($value,"wd")==0){
            $this->db->where('team1', $team);
            $this->db->where('id', $arr[0]['id']);
            $this->db->set('team1_total', 'team1_total +1' , FALSE);
            $this->db->update('temp');

            $this->db->where('team2', $team);
            $this->db->where('id', $arr[0]['id']);
            $this->db->set('team2_total', 'team2_total +1' , FALSE);
            $this->db->update('temp');

        }

        if(strcmp($value,"w")==0){
            $this->db->where('team1', $team);
            $this->db->where('id', $arr[0]['id']);
            $this->db->set('team1_wicket', 'team1_wicket +1' , FALSE);
            $this->db->update('temp');

            $this->db->where('team2', $team);
            $this->db->where('id', $arr[0]['id']);
            $this->db->set('team2_wicket', 'team2_wicket +1', FALSE);
            $this->db->update('temp');

        }
    }

}