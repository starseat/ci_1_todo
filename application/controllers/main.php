<?php if (!defined('BASEPATH')) exit('No direct script access allowed');  // 이거는 그냥 복붙해서 계속 쓰기

/**
 * todo controller
 */
class Main extends CI_Controller // 클래스명은 파일명과 동일하게 맞춰줘야함.
{ 
    // 생성자
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('todo_m');  // 불필요한 서버 자원의 낭비 방지. 입출력에 관련된 라이브러리 이외에는 모두 로딩하고 사용하여야 함.
                                       // 파라미터로 받은 명칭으로 사용 가능해짐.  $this->todo_m->함수명 형태
        $this->load->helper(array('url', 'data'));  // uurl 헬퍼 로딩. todo 목록으로 돌아가려고 사용하는 redirect() 함수를 사용하기 위하여 로딩
    }

    // 주소에서 메서드가 생략되었을때 실행되는 기본 메서드
    public function index()
    {
        $this->lists(); // 기본 메서드로 lists() 호출
                        // ~/index.php/main/lists 의 주소로 호출됨.
    }

    // todo 목록
    public function lists()
    {
        $data['list'] = $this->todo_m->get_list();

        $this->load->view('todo/list_v', $data);
    }

}

// End of file main.php
// location: ./application/controllers/main.php
