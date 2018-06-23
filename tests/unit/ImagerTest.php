<?php

	class ImagerTest extends \PHPUnit_Framework_Testcase
	{

    protected $imager;
    protected $image;
    protected $image_type;

    public function setUp()
    {
        $this -> imager = new \App\Core\Imager();
        $this -> imager -> load("http://localhost/emazonResource/images/product_gallery_images/Stock/tripcush_flight_promo.jpg_resized.jpg");
        $this -> image_type = $this -> imager -> image_type;
    }

    /** @test */
    public function widthTest()
    {
        $this -> assertEquals($this -> imager -> getWidth(), 400);
    }


    /** @test */
    public function heightTest()
    {
        $this -> assertEquals($this -> imager -> getHeight(), 400);
    }

    /** @test*/
    public function testLoad()
    {
        $this -> imager -> load("http://localhost/emazonResource/images/product_gallery_images/Stock/tripcush_flight_promo.jpg_resized.jpg");
        $this -> assertEquals($this-> imager -> image_type , 2);
    }

    /** @test */
    public function testResizeToHeight()
    {
        $this -> imager -> resizeToHeight(350);
        $this -> assertEquals($this -> imager -> getHeight(), 350);
    }

    /** @test */
    public function testResizeToWidth()
    {
        $this -> imager -> resizeToWidth(300);
        $this -> assertEquals($this -> imager -> getWidth(), 300);
    }

    /** @test */
    public function testScaler()
    {
        $this -> imager -> resize(400,300);
        $this -> imager -> scale(2);
        $this -> assertEquals($this -> imager -> getWidth(), 8);
        $this -> assertEquals($this -> imager -> getHeight(), 6);
    }


  }
