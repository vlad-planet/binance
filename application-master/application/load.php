<?
class Load {
	function view($file_name, $data = null)
	{
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}

		// динамически подключаем шаблон отображения (вид)
		require "views/".$file_name;
	}

}