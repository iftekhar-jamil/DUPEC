<?php

class Live extends My_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database('sports');
        $this->load->model('prime_model');

    }


    public function index()
    {
        //echo "asaddas";
        $p = $this->input->post('passwd');
        $a = $this->input->post('account');
        $data = array(
            'account' => $this->input->post('account'),
            'password' => $this->input->post('passwd')


        );

        $this->load->view('ui/login', $data);
    }

    public function operate()
    {
        $id = $this->uri->segment(3);
        if($id!=null){
            // echo $id;
            $query = $this->db->query("SELECT * from fixture where id = $id");
            $arr = $query->result_array();
            //print_r($arr);
            $this->db->select('*');
            $this->db->where('department_name', $arr[0]['team1']);
            $query = $this->db->get('sport_participation');
            $temp1 =  $query->result_array();
            //print_r(count($temp));

            $this->db->select('*');
            $this->db->where('department_name', $arr[0]['team2']);
            $query = $this->db->get('sport_participation');
            $temp2 =  $query->result_array();


            $data = array(
                'team1' => $arr[0]['team1'],
                'team2' => $arr[0]['team2'],
                'temp1' => $temp1,
                'temp2' => $temp2,

            );
            if($this->session->userdata('usertype')=='Operator') {
                $this->load->view('header/operator_header');
//            $this->load->view('ui/left_side');
                $this->load->view('live/liveOperatorf',$data);
//            $this->load->view('ui/right_side');
            }
        }
        else {
            if ($this->session->userdata('usertype') == 'Operator') {
                $this->load->view('header/operator_header');
//            $this->load->view('ui/left_side');
                $this->load->view('live/liveOperator');
//            $this->load->view('ui/right_side');
            }
        }
    }

    public function takeInput()
    {

        $team1 = array(
            'player1' => $this->input->post('p11'),
            'reg1' => $this->input->post('r11'),
            'player2' => $this->input->post('p12'),
            'reg2' => $this->input->post('r12'),
            'player3' => $this->input->post('p13'),
            'reg3' => $this->input->post('r13')
        );

        $team2 = array(
            'player1' => $this->input->post('p21'),
            'reg1' => $this->input->post('r21'),
            'player2' => $this->input->post('p22'),
            'reg2' => $this->input->post('r22'),
            'player3' => $this->input->post('p23'),
            'reg3' => $this->input->post('r23')
        );


        $playerData = array(
            'id' => 0,
            'name' => 'player',
            'dept' =>'du',
            'match_played' => 0,
            'runs' => 0,
            'balls' => 0,
            'fours' => 0,
            'sixes' => 0,
            'ball_bowled' => 0,
            'wicket' => 0,
            'run_given' => 0,
            'cricketMOM' => 0,
            'volleyballMOM' => 0,
            '1st' => 0,
            '2nd' => 0,
            '3rd' => 0
        );


        $this->db->where('id',$this->input->post('r11'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            //$this->db->set('id',$this->input->post('r11') );
            $playerData['id'] = $this->input->post('r11');
            $playerData['name'] = $this->input->post('p11');
            $playerData['dept'] = $this->input->post('team1');
            $this->db->insert('individual_player',$playerData);
        }



        $this->db->where('id',$this->input->post('r12'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            //$this->db->set('id',$this->input->post('r11') );
            $playerData['id'] = $this->input->post('r12');
            $playerData['name'] = $this->input->post('p12');
            $playerData['dept'] = $this->input->post('team1');
            $this->db->insert('individual_player',$playerData);
        }


        $this->db->where('id',$this->input->post('r13'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            $playerData['id'] = $this->input->post('r13');
            $playerData['name'] = $this->input->post('p13');
            $playerData['dept'] = $this->input->post('team1');
            $this->db->insert('individual_player',$playerData);
        }


//        $this->db->where('id',$this->input->post('r21'));
//        $q = $this->db->get('individual_player');
//        if($q->num_rows() == 0) {
//            $playerData['id'] = $this->input->post('r21');
//            $playerData['name'] = $this->input->post('p21');
//            $playerData['dept'] = $this->input->post('team2');
//            $this->db->insert('individual_player',$playerData);
//        }


        $this->db->where('id',$this->input->post('r21'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            $playerData['id'] = $this->input->post('r21');
            $playerData['name'] = $this->input->post('p21');
            $playerData['dept'] = $this->input->post('team2');
            $this->db->insert('individual_player',$playerData);
        }

        $this->db->where('id',$this->input->post('r22'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            $playerData['id'] = $this->input->post('r22');
            $playerData['name'] = $this->input->post('p22');
            $playerData['dept'] = $this->input->post('team2');
            $this->db->insert('individual_player',$playerData);
        }

        $this->db->where('id',$this->input->post('r23'));
        $q = $this->db->get('individual_player');
        if($q->num_rows() == 0) {
            $playerData['id'] = $this->input->post('r23');
            $playerData['name'] = $this->input->post('p23');
            $playerData['dept'] = $this->input->post('team2');
            $this->db->insert('individual_player',$playerData);
        }



        $this->db->where('department_name',$this->input->post('team1'));
        $q = $this->db->get('sport_participation');

        if ( $q->num_rows() > 0 )
        {
            $this->db->where('department_name',$this->input->post('team1'));
            $this->db->update('sport_participation',$team1);
        } else {
            $this->db->set('department_name',$this->input->post('team1') );
            $this->db->insert('sport_participation',$team1);
        }

        $this->db->where('department_name',$this->input->post('team2'));
        $q = $this->db->get('sport_participation');

        if ( $q->num_rows() > 0 )
        {
            $this->db->where('department_name',$this->input->post('team2'));
            $this->db->update('sport_participation',$team2);
        } else {
            $this->db->set('department_name',$this->input->post('team2') );
            $this->db->insert('sport_participation',$team2);
        }




        $temp_arr1 = $this->prime_model->get_players('sport_participation', $this->input->post('team1'));
        $temp_arr2 = $this->prime_model->get_players('sport_participation', $this->input->post('team2'));

        // $temp_arr1 = $this->prime_model->get_players('sport_participation', $arr[0]['team1']);
        //$temp_arr2 = $this->prime_model->get_players('sport_participation', $arr[0]['team2']);

        // echo $temp_arr2[0]['reg2'];

        if($this->input->post('batting')==$this->input->post('team2')){
            $temp = $temp_arr1;
            $temp_arr1 = $temp_arr2;
            $temp_arr2 = $temp;
        }

        $arr1 = array(); $arr2 = array();
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg1']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg2']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg3']));

        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg1']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg2']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg3']));


        // print_r($arr1); print_r($arr2);




        $data = array(
            'team1' => $this->input->post('team1'),
            'team2' => $this->input->post('team2'),
            'toss' => $this->input->post('toss'),
            'batting' => $this->input->post('batting'),
            'batsmen' => $arr1,
            'bowlers' => $arr2,
            'batsmen_reg' => $temp_arr1,
            'bowlers_reg' => $temp_arr2
        );

        $this->prime_model->insertValue($this->input->post('team1'),$this->input->post('team2'),$this->input->post('toss'),$this->input->post('batting'));

        $temp = array_merge($arr1,$arr2);
        $temp1 = array_merge($temp_arr1,$temp_arr2);
        //print_r($temp1[0]['reg1']);
        //print_r($temp[0][0]['name']);
        //print_r($temp);
        // echo "--------------------<br>";
        //print_r($temp1);
//        echo $this->db->select('id')->order_by('id','desc')->limit(1)->get('temp')->row('id');
//        $this->prime_model->insertValue2($temp,$temp1,$this->db->select('id')->order_by('id','desc')->limit(1)->get('temp')->row('id'));

        //print_r($temp[0]['0']['name']);

        //print_r($data['batsmen'][0][0]['name']);
//        print_r($data['batsmen'][1][0]['name']);

        $this->prime_model->insertValue2($temp,$temp1,$this->db->select('id')->order_by('id','desc')->limit(1)->get('temp')->row('id'));
        if($this->session->userdata('usertype')=='Operator') {
            $this->load->view('header/operator_header',$data);
            $this->load->view('fixture/operate',$data);
        }
    }

    public function inningsBreak()
    {


        $arr = $this->prime_model->retriveValue();
        //print_r($arr);
        //print_r($arr[0]['toss']);

        //if($arr[0]['batting'] == $arr[0]['team1']) $arr[0]['batting'] = $arr[0]['team2'];
        //else $arr[0]['batting'] = $arr[0]['team2'];

        // print_r($arr);

        $temp_arr1 = $this->prime_model->get_players('sport_participation', $arr[0]['team1']);
        $temp_arr2 = $this->prime_model->get_players('sport_participation', $arr[0]['team2']);


        if ($arr[0]['batting'] == $arr[0]['team1']) {
            $res = array('batting' => $arr[0]['team2']);
            $this->db->where('id', $arr[0]['id']);
            $this->db->update('temp', $res);
            $arr[0]['batting'] = $arr[0]['team2'];
            $temp = $temp_arr1;
            $temp_arr1 = $temp_arr2;
            $temp_arr2 = $temp;
        } else {
            $res = array('batting' => $arr[0]['team1']);
            $this->db->where('id', $arr[0]['id']);
            $this->db->update('temp', $res);
            $arr[0]['batting'] = $arr[0]['team1'];
        }


        $arr1 = array();
        $arr2 = array();
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg1']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg2']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg3']));

        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg1']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg2']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg3']));


        $data = array(
            'team1' => $arr[0]['team1'],
            'team2' => $arr[0]['team2'],
            'toss' => $arr[0]['toss'],
            'batting' => $arr[0]['batting'],
            'batsmen' => $arr1,
            'bowlers' => $arr2,
            'batsmen_reg' => $temp_arr1,
            'bowlers_reg' => $temp_arr2
        );
        //  print_r($data);


        if ($this->session->userdata('usertype') == 'Operator') {
            $this->load->view('header/operator_header', $data);
            $this->load->view('fixture/operate');
        }
        else {
            $this->load->view('ui/page404');
        }
    }


    public function liveUpdate()
    {
        $arr = $this->prime_model->retriveValue();
        $temp_arr1 = $this->prime_model->get_players('sport_participation', $arr[0]['team1']);
        $temp_arr2 = $this->prime_model->get_players('sport_participation', $arr[0]['team2']);

        if ($arr[0]['batting'] == $arr[0]['team2']) {
            $temp = $temp_arr1;
            $temp_arr1 = $temp_arr2;
            $temp_arr2 = $temp;
        }


        $arr1 = array();
        $arr2 = array();
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg1']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg2']));
        array_push($arr1, $this->prime_model->get_playername($temp_arr1[0]['reg3']));

        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg1']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg2']));
        array_push($arr2, $this->prime_model->get_playername($temp_arr2[0]['reg3']));


        $batsman1 = $this->input->post('batsman');
        $bowler1 = $this->input->post('bowler');
        $run1 = $this->input->post('run');

        $data = array(
            'team1' => $arr[0]['team1'],
            'team2' => $arr[0]['team2'],
            'toss' => $arr[0]['toss'],
            'batting' => $arr[0]['batting'],
            'batsmen' => $arr1,
            'bowlers' => $arr2,
            'batsmen_reg' => $temp_arr1,
            'bowlers_reg' => $temp_arr2
        );

        $runs = explode(" ", $run1);
        $temp = $runs[count($runs) - 1];
        $team = $arr[0]['batting'];
        $this->prime_model->team_total($temp, $team);
        $this->prime_model->updateValue($batsman1, "bat", $temp);
        $this->prime_model->updateValue($bowler1, "bowl", $temp);


        if ($this->session->userdata('usertype') == 'Operator') {
            $this->load->view('header/operator_header', $data);
            $this->load->view('fixture/operate');
        }
        else {
            $this->load->view('ui/page404');
        }
    }


    public function liveScore()
    {
        $arr = $this->prime_model->retriveValue();
        //print_r($arr);
        $this->db->select('*');
        $this->db->where('department_name', $arr[0]['team1']);
        $query = $this->db->get('sport_participation');
        $temp1 =  $query->result_array();
        $this->db->select('*');
        $this->db->where('department_name', $arr[0]['team2']);
        $query = $this->db->get('sport_participation');
        $temp2 =  $query->result_array();
        $arr1 = $this->prime_model->get_players('sport_participation', $arr[0]['team1']);
        $arr2 = $this->prime_model->get_players('sport_participation', $arr[0]['team2']);

        // $arr = array_merge($arr1,$arr2);
        $player1 = $this->prime_model->retrivePlayerInfoByTeam($arr[0]['id'],$arr[0]['team1']);
        $arr1 = $arr;
        $arr1 = $player1;
        //echo $arr1;
        $player2 = $this->prime_model->retrivePlayerInfoByTeam($arr[0]['id'],$arr[0]['team2']);
        $arr2 = $player2;
        //print_r($player);
        $info = array(
            'arr' => $arr,
            'player1' =>$arr1[0],
            'player2' =>$arr1[1],
            'player3' =>$arr1[2],
            'player4' =>$arr2[0],
            'player5' =>$arr2[1],
            'player6' =>$arr2[2]
        );


        //$this->prime_model->retriveValue($arr);
        if($this->session->userdata('usertype')=='Admin') {
            $this->load->view('header/admin_header',$info);
            $this->load->view('ui/left_side');
            $this->load->view('live/live_view.php',$info);
            $this->load->view('ui/right_side');
        }

        else if($this->session->userdata('usertype')=='User') {
            $this->load->view('header/user_header',$info);
            $this->load->view('ui/left_side');
            $this->load->view('live/live_view.php',$info);
            $this->load->view('ui/right_side');
        }

        else if($this->session->userdata('usertype')=='Operator') {
            $this->load->view('header/operator_header',$info);
            $this->load->view('ui/left_side');
            $this->load->view('live/live_view.php',$info);
            $this->load->view('ui/right_side');
        }

        else
             {
                $this->load->view('header/guest_header',$info);
                $this->load->view('ui/left_side');
                $this->load->view('live/live_view.php',$info);
                $this->load->view('ui/right_side');
            }


    }


    public function finishMatch()
    {
        $arr = $this->prime_model->retriveValue();
        $result = $this->prime_model->retrivePlayerInfo($arr[0]['id']);
        $this->prime_model->updateCareer($result);
        $this->prime_model->updateDepartmentStats($result);
        // print_r($result[3]);
        if ($this->session->userdata('usertype') == 'Operator') {
            redirect('login/gotoOperator');
        } else {
            $this->load->view('ui/page404');
        }
    }


    public function showPreviousMatch()
    {
        // $arr = $this->prime_model->showPreviousMatch();
        $data = array();
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment']=0;

        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/prev_match');
            $this->load->view('ui/right_side');
        } else if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/prev_match');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/prev_match');
            $this->load->view('ui/right_side');
        }
    }


    public function showMatchDetails()
    {
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('temp');
        $arr = $query->result_array();

        $this->db->select('*');
        $this->db->where('match_id', $id);
        $query = $this->db->get('temp_players');
        $arr1 = $query->result_array();

        $arr2 = array(); $arr3 = array();
        $temp = $this->prime_model->get_playerTeam($arr1[0]['player_id']);
        //print_r($temp);
        for($i=0; $i<count($arr1); $i++){
            $temp = $this->prime_model->get_playerTeam($arr1[$i]['player_id']);
            if(strcmp($temp[0]['dept'],$arr[0]['team1'])==0)
                array_push($arr2,$arr1[$i]);
            else array_push($arr3,$arr1[$i]);
       }
        // print_r($arr1);
        //$this->prime_model->get_playerTeam($arr1[0]['player_id']);
       // print_r($arr2);

        //print_r($arr3);
        $data = array(
            'team1' => $arr[0]['team1'],
            'team2' => $arr[0]['team2'],
            'team1_total' => $arr[0]['team1_total'],
            'team2_total' => $arr[0]['team2_total'],
//            'player1' => $arr2[0],
//            'player2' => $arr2[1],
//            'player3' => $arr2[2],
//            'player4' => $arr2[3],
//            'player5' => $arr2[4],
//            'player6' => $arr2[5],
            'p1' => $arr2[0]['player1'],
            'r1' => $arr2[0]['player_id'],
            'p2' => $arr2[1]['player1'],
            'r2' => $arr2[1]['player_id'],
            'p3' => $arr2[2]['player1'],
            'r3' => $arr2[2]['player_id'],
            'p4' => $arr3[0]['player1'],
            'r4' => $arr3[0]['player_id'],
            'p5' => $arr3[1]['player1'],
            'r5' => $arr3[1]['player_id'],
            'p6' => $arr3[2]['player1'],
            'r6' => $arr3[2]['player_id'],
            'p1bp' => $arr2[0]['ball_played'],
            'p2bp' => $arr2[1]['ball_played'],
            'p3bp' => $arr2[2]['ball_played'],
            'p4bp' => $arr3[0]['ball_played'],
            'p5bp' => $arr3[1]['ball_played'],
            'p6bp' => $arr3[2]['ball_played'],
            'p1rs' => $arr2[0]['run_scored'],
            'p2rs' => $arr2[1]['run_scored'],
            'p3rs' => $arr2[2]['run_scored'],
            'p4rs' => $arr3[0]['run_scored'],
            'p5rs' => $arr3[1]['run_scored'],
            'p6rs' => $arr3[2]['run_scored'],
            'p14s' => $arr2[0]['fours'],
            'p24s' => $arr2[1]['fours'],
            'p34s' => $arr2[2]['fours'],
            'p44s' => $arr3[0]['fours'],
            'p54s' => $arr3[1]['fours'],
            'p64s' => $arr3[2]['fours'],
            'p16s' => $arr2[0]['sixes'],
            'p26s' => $arr2[1]['sixes'],
            'p36s' => $arr2[2]['sixes'],
            'p46s' => $arr3[0]['sixes'],
            'p56s' => $arr3[1]['sixes'],
            'p66s' => $arr3[2]['sixes'],
            'p1bb' => $arr2[0]['ball_bowled'],
            'p2bb' => $arr2[1]['ball_bowled'],
            'p3bb' => $arr2[2]['ball_bowled'],
            'p4bb' => $arr3[0]['ball_bowled'],
            'p5bb' => $arr3[1]['ball_bowled'],
            'p6bb' => $arr3[2]['ball_bowled'],
            'p1rg' => $arr2[0]['runs_given'],
            'p2rg' => $arr2[1]['runs_given'],
            'p3rg' => $arr2[2]['runs_given'],
            'p4rg' => $arr3[0]['runs_given'],
            'p5rg' => $arr3[1]['runs_given'],
            'p6rg' => $arr3[2]['runs_given'],
            'p1w' => $arr2[0]['wickets'],
            'p2w' => $arr2[1]['wickets'],
            'p3w' => $arr2[2]['wickets'],
            'p4w' => $arr3[0]['wickets'],
            'p5w' => $arr3[1]['wickets'],
            'p6w' => $arr3[2]['wickets']

        );
        //  print_r($data);
        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/match_details');
            $this->load->view('ui/right_side');
        } elseif ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/match_details');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/match_details');
            $this->load->view('ui/right_side');
        }
            //$this->load->view('header/guest_header',$data);
       // $this->load->view('ui/match_details');
    }

    public function showPlayerDetails($id)
    {
        $id = $this->uri->segment(3);
        //echo $id;
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('individual_player');
        $arr = $query->result_array();
        $data = array(
            'arr' => $arr
        );
        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/player');
            $this->load->view('ui/right_side');
        } elseif ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/player');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/player');
            $this->load->view('ui/right_side');
        }
    }

    public function showDeptDetails()
    {
        $dept = $this->uri->segment(3);
        //echo $dept;
        $this->db->select('*');
        $this->db->where('department_name', $dept);
        $query = $this->db->get('sport_participation');
        $arr1 = $query->result_array();

        $this->db->select('*');
        $this->db->where('department_name', $dept);
        $query = $this->db->get('departments');
        $arr2 = $query->result_array();

        $data = array(
            'arr1' => $arr1,
            'arr2' => $arr2
        );
        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/department', $data);
            $this->load->view('ui/right_side');
        } elseif ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/department', $data);
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/department', $data);
            $this->load->view('ui/right_side');
        }
    }




    public function update(){


        $arr = $this->prime_model->retriveValue();
        //print_r($arr);
        $this->db->select('*');
        $this->db->where('department_name', $arr[0]['team1']);
        $query = $this->db->get('sport_participation');
        $temp1 =  $query->result_array();
        $this->db->select('*');
        $this->db->where('department_name', $arr[0]['team2']);
        $query = $this->db->get('sport_participation');
        $temp2 =  $query->result_array();
        $arr1 = $this->prime_model->get_players('sport_participation', $arr[0]['team1']);
        $arr2 = $this->prime_model->get_players('sport_participation', $arr[0]['team2']);

        // $arr = array_merge($arr1,$arr2);
        $player1 = $this->prime_model->retrivePlayerInfoByTeam($arr[0]['id'],$arr[0]['team1']);
        $arr1 = $arr;
        $arr1 = $player1;
        //echo $arr1;
        $player2 = $this->prime_model->retrivePlayerInfoByTeam($arr[0]['id'],$arr[0]['team2']);
        $arr2 = $player2;
        //print_r($player);
        $info = array(
            'arr' => $arr,
            'player1' =>$arr1[0],
            'player2' =>$arr1[1],
            'player3' =>$arr1[2],
            'player4' =>$arr2[0],
            'player5' =>$arr2[1],
            'player6' =>$arr2[2]
        );
        header('Content-type: application/json');
        echo json_encode($info);

    }




}

?>