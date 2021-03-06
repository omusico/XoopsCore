<?php
require_once(dirname(__FILE__).'/../init.php');

class BlockHandlerTest extends MY_UnitTestCase
{
    
    public function SetUp() {
    }
    
    public function test_100() {
        $instance = new XoopsBlockHandler();
        $this->assertInstanceOf('XoopsBlockHandler',$instance);
		$this->assertRegExp('/^.*newblocks$/',$instance->table);
		$this->assertSame('bid',$instance->keyName);
		$this->assertSame('XoopsBlock',$instance->className);
		$this->assertSame(null,$instance->table_link);
		$this->assertSame('name',$instance->identifierName);
		$this->assertSame(null,$instance->field_link);
		$this->assertSame(null,$instance->field_object);
		$this->assertSame(null,$instance->keyName_link);
    }
    
    public function test_120() {
        $block = new XoopsBlock();
		$block->setNew();
        $instance = new XoopsBlockHandler();
        $value = $instance->insertBlock($block);
		$bid = $block->bid();
        $this->assertEquals($bid,$value);
		$value = $instance->get($bid);
        $this->assertEquals($bid,$value->bid());
        $value = $instance->deleteBlock($block);
		$this->markTestSkipped('');
        $this->assertSame(true,$value);
		$value = $instance->get($bid);
        $this->assertSame(null,$value);
    }
    
    public function test_160() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getDistinctObjects();
        $this->assertTrue(is_array($value));
    }
    
    public function test_180() {
        $instance = new XoopsBlockHandler();
		$criteria = new Criteria('bid');
        $value = $instance->getDistinctObjects($criteria);
        $this->assertTrue(is_array($value));
    }
	
    public function test_200() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getNameList();
        $this->assertTrue(is_array($value));
    }
    
    public function test_220() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getAllBlocksByGroup(1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(1, false);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(array(1,1,1), false);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(1, true, XOOPS_SIDEBLOCK_BOTH);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(1, true, XOOPS_CENTERBLOCK_ALL);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(1, true, -1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocksByGroup(1, true, null, 1);
        $this->assertTrue(is_array($value));
    }
    
    public function test_240() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getAllBlocks();
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('object', true, XOOPS_SIDEBLOCK_BOTH);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('object', true, XOOPS_CENTERBLOCK_ALL);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('object', true, -1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('object', true, null, 1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('list');
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllBlocks('id');
        $this->assertTrue(is_array($value));
    }
    
    public function test_260() {
        $instance=new XoopsBlockHandler();
        $value = $instance->getByModule('module');
        $this->assertTrue(is_array($value));
		
        $value = $instance->getByModule('module', false);
        $this->assertTrue(is_array($value));
    }
    
    public function test_280() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getAllByGroupModule(1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllByGroupModule(array(1,1,1));
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllByGroupModule(1, 1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getAllByGroupModule(1, 1, true);
        $this->assertTrue(is_array($value));
    }
    
    public function test_300() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getNonGroupedBlocks();
        $this->assertTrue(is_array($value));
		
        $value = $instance->getNonGroupedBlocks(1);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getNonGroupedBlocks(1, true);
        $this->assertTrue(is_array($value));
		
        $value = $instance->getNonGroupedBlocks(0, false, true);
        $this->assertTrue(is_array($value));
    }
    
    public function test_320() {
        $instance = new XoopsBlockHandler();
        $value = $instance->countSimilarBlocks(1, 1);
        $this->assertEquals(1 ,$value);
		
        $value = $instance->countSimilarBlocks(1, 1, 'shows_func');
        $this->assertEquals(0 ,$value);
    }
    
    public function test_340() {
        $instance = new XoopsBlockHandler();
        $value = $instance->buildContent(0, 'titi', 'toto');
        $this->assertSame('tototiti',$value);
		
        $value = $instance->buildContent(1, 'titi', 'toto');
        $this->assertSame('tititoto',$value);
		
        $value = $instance->buildContent(2, 'titi', 'toto');
        $this->assertSame('',$value);
    }
    
    public function test_360() {
        $instance = new XoopsBlockHandler();
        $title = 'original';
        $value = $instance->buildTitle($title);
        $this->assertEquals($title,$value);
        $title = 'original2';
        $new = 'new';
        $value = $instance->buildTitle($title,$new);
        $this->assertEquals($new,$value);
    }
    
    public function test_380() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getBlockByPerm(null);
        $this->assertTrue(empty($value) AND is_array($value));
    }
	
    public function test_400() {
        $instance = new XoopsBlockHandler();
        $value = $instance->getBlockByPerm(1);
        $this->assertTrue(is_array($value));
    }
}
