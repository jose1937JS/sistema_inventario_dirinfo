<?php 

class Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_users($usuario)
	{
		return $this->db->get_where('usuarios', ['usuario' => $usuario]);

	}

	public function regitrarEquipo()
	{
		$this->db->insert('estudiantes', $info);
	}

	public function registrarFallas($falla)
	{
		$this->db->insert('descripcion', $falla);
	}

	public function getEquipos()
	{
		return $this->db->select('tipo_equipos.nombre_eq, equipos.serial, equipos.fecha_ingreso, fallas.descripcion_falla, equipos.status, departamentos.nombre_dpto, tecnicos.nombre, tecnicos.apellido')
				->from('equipos')
				->join('tipo_equipos', 'tipo_equipos.id = equipos.tipo_id')
				->join('fallas', 'fallas.id = equipos.falla_id')
				->join('tecnicos', 'tecnicos.id = equipos.tec_id')
				->join('departamentos', 'tecnicos.dpto_id = departamentos.id')
				->get()->result();

		// return $this->db->select('equipos.descripcion, equipos.serial, equipos.fecha_ingreso, equipos.status, fallas.descripcion_falla, tipo_equipos.nombre_eq, tecnicos.nombre_tecnico, tecnicos.apellido, departamentos.nombre_dpto')
		// 	->from('equipos')
		// 	->join('tipo_equipos', 'tipo_equipos.id = equipos.tipo_id')
		// 	->join('fallas', 'fallas.id = equipos.falla_id')
		// 	->join('tecnicos', 'tecnicos.id = equipos.tec_id')
		// 	->join('departamentos', 'departamentos.id = tecnicos.dpto_id')
		// 	->get()->result();
	}	


	public function getAll()
	{
		return $this->db->select('*')
						->from('equipos')
						->get()
						->result();
	}

	public function getReparacion()
	{
		return $this->db->select('tipo_equipos.nombre_eq, equipos.serial, equipos.fecha_ingreso, fallas.descripcion_falla,equipos.status, departamentos.nombre_dpto, tecnicos.nombre, tecnicos.apellido')
				->from('equipos')
				->join('tipo_equipos', 'tipo_equipos.id = equipos.tipo_id')
				->join('fallas', 'fallas.id = equipos.falla_id')
				->join('tecnicos', 'tecnicos.id = equipos.tec_id')
				->join('departamentos', 'tecnicos.dpto_id = departamentos.id')
				->where('equipos.status', 'En reparacion')
				->get()->result();
	}

	public function getDaniados()
	{
		return $this->db->select('tipo_equipos.nombre_eq, equipos.serial, equipos.fecha_ingreso, fallas.descripcion_falla,equipos.status, departamentos.nombre_dpto, tecnicos.nombre, tecnicos.apellido')
				->from('equipos')
				->join('tipo_equipos', 'tipo_equipos.id = equipos.tipo_id')
				->join('fallas', 'fallas.id = equipos.falla_id')
				->join('tecnicos', 'tecnicos.id = equipos.tec_id')
				->join('departamentos', 'tecnicos.dpto_id = departamentos.id')
			->where('equipos.status', 'Dañado')
			->get()->result();
	}

	public function getTipoEquipo()
	{
		return $this->db->select('id, nombre_eq')
				->from('tipo_equipos')
				->get()->result();
	}

	public function getFalla()
	{
		return $this->db->select('id, descripcion_falla, dpto_id')
				->from('fallas')
				->get()->result();
	}

	public function getIdFalla()
	{
		return $this->db->select('id')
					->from('fallas')
					->get()->result();
	}

	public function insertarEquipo($data)
	{
		$this->db->insert('equipos', $data);
	}

	public function get_tec_depto()
	{
		return $this->db->select('tecnicos.nombre, tecnicos.apellido, tecnicos.dpto_id')
			->from('tecnicos')
			->join('departamentos', 'departamentos.id = tecnicos.dpto_id')
			->get()->result();
	}

	public function insertarPersona($data)
	{
		$this->db->insert('usuarios', $data);
	}

	public function filtrarSerial($serial)
	{
		return $this->db->select('tipo_equipos.nombre_eq, equipos.serial, equipos.fecha_ingreso, fallas.descripcion_falla,equipos.status, departamentos.nombre_dpto, tecnicos.nombre, tecnicos.apellido')
				->from('equipos')
				->join('tipo_equipos', 'tipo_equipos.id = equipos.tipo_id')
				->join('fallas', 'fallas.id = equipos.falla_id')
				->join('tecnicos', 'tecnicos.id = equipos.tec_id')
				->join('departamentos', 'tecnicos.dpto_id = departamentos.id')
				->where('equipos.serial', $serial)
				->get()->result();
	}

	public function getTecDpto($id)
	{
		return $this->db->select('id, nombre, apellido, dpto_id')
				->from('tecnicos')
				->where('dpto_id', $id)
				->get()->result();	
	}
}
