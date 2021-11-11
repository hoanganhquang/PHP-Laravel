<?php
class Course extends Model
{
    private $table = "courses";

    public function all()
    {
        $data = $this->db->selectAll($this->table);

        $this->db->close();

        return $data;
    }
}
