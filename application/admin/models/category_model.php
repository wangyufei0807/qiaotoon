<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 分类模型
 */
class Category_model extends Ci_model{

	public function __construct()
	{
		parents::__construct();
	}

	/**
	 * 得到所有分类
	 */
	public function get_all_category()
	{
		$data = $this->db->get('category');
		return $data;
	}

	/**
	 * 添加分类
	 */
	public function insert_category($data)
	{
		return $this->db->insert('category',$data);
	}

	/**
	 * 通过id删除分类
	 */
	public function del_category_by_id($id)
	{
		return $this->db->('category',array('id',$id));
	}

	/**
	 * 修改分类
	 */
	public function update_category($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('category',$data);
	}
}