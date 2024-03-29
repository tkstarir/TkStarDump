<?php

namespace LaunchPad\Components {

	if(!function_exists(__NAMESPACE__ . '\\TkStarDumpHandler')){
		// LaunchPad dumper for dump codes, data, contents and values with a new style and extra details
		// @variable Mixed $input
		// @variable Boolean $return_transfer | default false
		// @variable Integer $count_tabs | default 0
		// @variable Array $repeats
		// @return Mixed
		function TkStarDumpHandler(Mixed $input, Bool $return_transfer = false, Int $count_tabs = 0, Array $repeats = array()) : Mixed {
			if(is_string($input)){
				// check if input is string
				// proccess type of input by string type
				$output = 'string(' . strlen($input) . ') "' . $input . '"';
			}elseif(is_float($input) OR is_double($input)){
				// check elseif input is float or double
				// in php Float and double are same
				// proccess type of input by float/double type
				$output = 'float(' . $input . ')';
			}elseif(is_numeric($input)){
				// check elseif input is numeric
				// proccess type of input by integer type
				$output = 'int(' . $input . ')';
			}elseif(is_bool($input)){
				// check elseif input is boolean
				// check input is true or false
				$output = ($input AND $input === true) ? 'true' : 'false';
				// proccess type of input by boolean type
				$output = 'bool(' . $output . ')';
			}elseif(is_resource($input)){
				// check elseif input is resource
				// get resource id of current header
				$res_id = $input;
				$res_id = preg_replace('/\D/', '', $res_id);
				// get resource type of current header
				$res_type = get_resource_type($input);
				// proccess type of input by resource type
				$output = 'resource(' . $res_id . ') of type (' . $res_type . ')';
			}elseif(is_null($input)){
				$output = 'null';
			}elseif(is_array($input)){
				// check elseif input is array
				// lets start output
				// proccess type of input by array type
				$output = 'array(' . count($input) . ') {' . chr(10);
				// repeat tabs character for better reading
				$count_tabs++;
				$tabs = str_repeat(chr(9), $count_tabs);
				// proccess all indexes of array by $key => $value
				foreach($input as $key => $value){
					$output .= $tabs . '["' . $key . '"] => ' . TkStarDumpHandler($value, true, $count_tabs, $repeats) . chr(10);
				}
				// repeat tabs character for better reading
				$count_tabs--;
				$tabs = str_repeat(chr(9), $count_tabs);
				// end proccess
				$output .= $tabs . '}';
			}elseif(is_object($input)){
				// check elseif input is object
				// get class type of object
				// proccess type of input by array object
				$type = get_class($input);
				// repeat resource count of this class type in all of input
				$repeats[$type] = isset($repeats[$type]) ? $repeats[$type] + 1 : 1;
				// lets start output
				$output = 'object(' . $type . ')#' . $repeats[$type] . ' (' . count((array)$input) . ') {' . chr(10);
				// repeat tabs character for better reading
				$count_tabs++;
				$tabs = str_repeat(chr(9), $count_tabs);
				// proccess all indexes of object by $key => $value
				foreach($input as $key => $value){
					$output .= $tabs . '["' . $key . '"] => ' . TkStarDumpHandler($value, true, $count_tabs, $repeats) . chr(10);
				}
				// repeat tabs character for better reading
				$count_tabs--;
				$tabs = str_repeat(chr(9), $count_tabs);
				// end proccess
				$output .= $tabs . '}';
			}else{
				// else return self input or another proccesses by you
				$output = '';
			}
			// return or print output
			$output = $output . chr(10);
			// another proccesses for better reading
			if($count_tabs != 0){
				$tabs = str_repeat(chr(9), $count_tabs);
			}else{
				$tabs = '';
			}
			$output = str_replace(array('{' . chr(10) . $tabs . '}', chr(10) . chr(10)), array('{ }', chr(10)), $output);
			return($return_transfer ? $output : print($output));
		}
	}

	if(!function_exists(__NAMESPACE__ . '\\TkStarDump')){
		// Dump inputs with tkstar launchpad format
		// @variable Mixed ...$multi_variables
		// @return Boolean
		function TkStarDump() : Bool {
			// get all args from function
			$inputs = func_get_args();
			// check args count
			if(count($inputs) < 1){
				return false;
			}else{
				foreach($inputs as $input){
					TkStarDumpHandler($input, false);
				}
				return true;
			}
		}
	}

	if(!function_exists(__NAMESPACE__ . '\\TDD')){
		// clone of "TkStarDump" function
		// @variable Mixed ...$multi_variables
		// @return Boolean
		function TDD() : Bool {
			// get all args from function
			$inputs = func_get_args();
			$dumps = TkStarDump($inputs);
			return($dumps);
		}
	}

}

?>
