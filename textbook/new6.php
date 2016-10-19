 <?php
 class User{
 public function __construct($id, $class, $name, $label, $placeholder, $value)
    {
        $this->id          = $id;
        $this->class       = $class;
        $this->name        = $name;
        $this->label       = $label;
        $this->placeholder = $placeholder;
        $this->value       = $value;
    }

   /**
    * Generate the html of this element
    *
    * @return string
    */
    public function getHtml()
    {
        return sprintf(
            "<input type='text' id='%s' class='%s' name='%s' label='%s' placeholder='%s' value='%s'>",
            $this->id, $this->class, $this->name, $this->label, $this->placeholder, $this->value
        );
    }
}

$user1=new User();
?>