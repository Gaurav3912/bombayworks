<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['page'] = 'home';
        $this->load->view('page', $data);
    }

    public function ajax() {
        $post = $this->input->post();
        $response = array();


        try {
            if (!isset($post['action']) || $post['action'] == '')
                throw new Exception('Invalid Request');
            switch ($post['action']) {
                case 'getTemplate':

                    if (!isset($post['template']) || $post['template'] == '')
                        throw new Exception('Please select a shape');

                    $data = array();
                    $template = $this->parser->parse('template/' . $post['template'], $data, TRUE);

                    if (!$template || $template == '')
                        throw new Exception('Invalid Request');

                    $response['success'] = TRUE;
                    $response['data'] = $template;

                    break;

                case 'claculateArea':
                    
                    if (!isset($post['shape']) || $post['shape'] == '')
                        throw new Exception('Invalid Data');
                    $shape = $post['shape'];
                    
                    $result = $this->calculateArea($shape, $post);
                   
                    if($result['area'] === FALSE)
                        throw new Exception('Invalid Data');
                    
                    
                    $template = $this->parser->parse('template/area', $result, TRUE);
                    $response['success'] = TRUE;
                    $response['data'] = $template;
                    break;

                default:
                    throw new Exception('Invalid Request');
                    break;
            }
        } catch (Exception $exc) {
            $response['success'] = FALSE;
            $response['error'] = $exc->getMessage();
        }


        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    private function calculateArea($shape, $data) {
            $response = array();
        try {
            switch ($shape) {
                case 'rectangle':
                    if (!isset($data['rectangleLength']) || !is_Numeric($data['rectangleLength']))
                        throw new Exception('Invalid Data');
                    
                    if (!isset($data['rectangleWidth']) || !is_Numeric($data['rectangleWidth']))
                        throw new Exception('Invalid Data');
                    
                    $response['area'] = $data['rectangleLength'] * $data['rectangleWidth'];
                    $response['message'] = "You have calculated the area of a rectangle with length and width of ".$data['rectangleLength']." X ".$data['rectangleWidth'].". Below is your result";
                    
                    break;
                case 'square':
                    if (!isset($data['squareWidth']) || !is_Numeric($data['squareWidth']))
                        throw new Exception('Invalid Data');
                    
                    $response['area'] = $data['squareWidth'] * $data['squareWidth'];
                    $response['message'] = "You have calculated the area of a square with a width of ".$data['squareWidth'].". Below is your result";
                    break;
                case 'circle':
                    if (!isset($data['circleRadius']) || !is_Numeric($data['circleRadius']))
                        throw new Exception('Invalid Data');
                    
                    $response['area'] = 3.14 * $data['circleRadius'] * $data['circleRadius'];
                    $response['message'] = "You have calculated the area of a circle with a radius of ".$data['circleRadius'].". Below is your result";
                    
                    break;
                case 'ellipse':
                    if (!isset($data['ellipseMajorRadius']) || !is_Numeric($data['ellipseMajorRadius']))
                        throw new Exception('Invalid Data');
                    if (!isset($data['ellipseMinorRadius']) || !is_Numeric($data['ellipseMinorRadius']))
                        throw new Exception('Invalid Data');
                    
                    $response['area'] = 3.14 * $data['ellipseMajorRadius'] * $data['ellipseMinorRadius'];
                    $response['message'] = "You have calculated the area of a ellipse with major and minor radius of ".$data['ellipseMajorRadius']." and ".$data['ellipseMajorRadius']." respectivly. Below is your result";
                    break;

                default:
                    throw new Exception('Invalid Data');
                    break;
            }
        } catch (Exception $exc) {
            $response['area'] = FALSE;
        }
        
        return $response;
    }

}
