<?php
class Course extends Model
{
    protected $table = "courses";

    public function all()
    {
        $data = $this->db->selectAll($this->table);

        $this->db->close();

        return $data;
    }
}
