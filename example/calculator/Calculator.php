<?php

namespace Jungle\Example;

class Calculator
{

    /**
     * Syntax analyse action table
     */
    protected $action = array(0=>array(8=>array(0=>0,1=>1,),9=>array(0=>0,1=>2,),10=>array(0=>0,1=>3,),11=>array(0=>0,1=>4,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),1=>array(13=>array(0=>2,),),2=>array(6=>array(0=>0,1=>8,),7=>array(0=>0,1=>9,),13=>array(0=>1,1=>0,2=>1,3=>8,),),3=>array(4=>array(0=>0,1=>10,),5=>array(0=>0,1=>11,),13=>array(0=>1,1=>0,2=>1,3=>9,),6=>array(0=>1,1=>0,2=>1,3=>9,),7=>array(0=>1,1=>0,2=>1,3=>9,),2=>array(0=>1,1=>0,2=>1,3=>9,),),4=>array(3=>array(0=>0,1=>12,),13=>array(0=>1,1=>0,2=>1,3=>10,),6=>array(0=>1,1=>0,2=>1,3=>10,),7=>array(0=>1,1=>0,2=>1,3=>10,),2=>array(0=>1,1=>0,2=>1,3=>10,),4=>array(0=>1,1=>0,2=>1,3=>10,),5=>array(0=>1,1=>0,2=>1,3=>10,),),5=>array(13=>array(0=>1,1=>0,2=>1,3=>11,),6=>array(0=>1,1=>0,2=>1,3=>11,),7=>array(0=>1,1=>0,2=>1,3=>11,),2=>array(0=>1,1=>0,2=>1,3=>11,),4=>array(0=>1,1=>0,2=>1,3=>11,),5=>array(0=>1,1=>0,2=>1,3=>11,),3=>array(0=>1,1=>0,2=>1,3=>11,),),6=>array(13=>array(0=>1,1=>1,2=>1,3=>12,),6=>array(0=>1,1=>1,2=>1,3=>12,),7=>array(0=>1,1=>1,2=>1,3=>12,),2=>array(0=>1,1=>1,2=>1,3=>12,),4=>array(0=>1,1=>1,2=>1,3=>12,),5=>array(0=>1,1=>1,2=>1,3=>12,),3=>array(0=>1,1=>1,2=>1,3=>12,),),7=>array(9=>array(0=>0,1=>13,),10=>array(0=>0,1=>3,),11=>array(0=>0,1=>4,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),8=>array(10=>array(0=>0,1=>14,),11=>array(0=>0,1=>4,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),9=>array(10=>array(0=>0,1=>15,),11=>array(0=>0,1=>4,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),10=>array(11=>array(0=>0,1=>16,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),11=>array(11=>array(0=>0,1=>17,),12=>array(0=>0,1=>5,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),12=>array(12=>array(0=>0,1=>18,),0=>array(0=>0,1=>6,),1=>array(0=>0,1=>7,),),13=>array(2=>array(0=>0,1=>19,),6=>array(0=>0,1=>8,),7=>array(0=>0,1=>9,),),14=>array(4=>array(0=>0,1=>10,),5=>array(0=>0,1=>11,),13=>array(0=>1,1=>2,2=>3,3=>9,),6=>array(0=>1,1=>2,2=>3,3=>9,),7=>array(0=>1,1=>2,2=>3,3=>9,),2=>array(0=>1,1=>2,2=>3,3=>9,),),15=>array(4=>array(0=>0,1=>10,),5=>array(0=>0,1=>11,),13=>array(0=>1,1=>3,2=>3,3=>9,),6=>array(0=>1,1=>3,2=>3,3=>9,),7=>array(0=>1,1=>3,2=>3,3=>9,),2=>array(0=>1,1=>3,2=>3,3=>9,),),16=>array(3=>array(0=>0,1=>12,),13=>array(0=>1,1=>4,2=>3,3=>10,),6=>array(0=>1,1=>4,2=>3,3=>10,),7=>array(0=>1,1=>4,2=>3,3=>10,),2=>array(0=>1,1=>4,2=>3,3=>10,),4=>array(0=>1,1=>4,2=>3,3=>10,),5=>array(0=>1,1=>4,2=>3,3=>10,),),17=>array(3=>array(0=>0,1=>12,),13=>array(0=>1,1=>5,2=>3,3=>10,),6=>array(0=>1,1=>5,2=>3,3=>10,),7=>array(0=>1,1=>5,2=>3,3=>10,),2=>array(0=>1,1=>5,2=>3,3=>10,),4=>array(0=>1,1=>5,2=>3,3=>10,),5=>array(0=>1,1=>5,2=>3,3=>10,),),18=>array(13=>array(0=>1,1=>6,2=>3,3=>11,),6=>array(0=>1,1=>6,2=>3,3=>11,),7=>array(0=>1,1=>6,2=>3,3=>11,),2=>array(0=>1,1=>6,2=>3,3=>11,),4=>array(0=>1,1=>6,2=>3,3=>11,),5=>array(0=>1,1=>6,2=>3,3=>11,),3=>array(0=>1,1=>6,2=>3,3=>11,),),19=>array(13=>array(0=>1,1=>7,2=>3,3=>12,),6=>array(0=>1,1=>7,2=>3,3=>12,),7=>array(0=>1,1=>7,2=>3,3=>12,),2=>array(0=>1,1=>7,2=>3,3=>12,),4=>array(0=>1,1=>7,2=>3,3=>12,),5=>array(0=>1,1=>7,2=>3,3=>12,),3=>array(0=>1,1=>7,2=>3,3=>12,),),);

    /**
     * Tokens stack
     *
     * @var \SplStack
     */
    protected $stack = null;

    public function parse($data)
    {
        $tokens = $this->tokenizer($data);
        $this->stack = new \SplStack();
        $this->stack->push(0);

        while (true) {
            $token = $tokens[0];
            $state = $this->stack->top();
            $terminal = $token[0];

            if (!isset($this->action[$state][$terminal])) {
                throw new \Exception('Token not allowed here (' . $token[1] . ')');
            }

            $action = $this->action[$state][$terminal];
            if ($action[0] === 0) {
                $this->stack->push($token[1]);
                $this->stack->push($action[1]);
                array_shift($tokens);
            } elseif ($action[0] === 1) {
                $value = $this->reduce($action[2], $action[1]);
                array_unshift($tokens, array($action[3], $value));
            } elseif ($action[0] === 2) {
                $this->stack->pop();
                return $this->stack->pop();
            } else {
                throw new \RuntimeException('Cannot compile');
            }
        }

        throw new \RuntimeException('Cannot compile. EOF');
    }

    public function tokenizer($data)
    {
        $tokens = [];
        while (strlen($data) !== 0) {
            $token = $this->getNextToken($data);
            $data = substr($data, strlen($token[1]));
            $tokens[] = $token;
        }
        $tokens[] = array(13, '');
        return $tokens;
    }

    public function getNextToken($data)
    {
        if (preg_match('/^[0-9]+/', $data, $match)) {
            return [0, $match[0]];
        }

        if ('(' === substr($data, 0, 1)) {
            return [1, '('];
        }

        if (')' === substr($data, 0, 1)) {
            return [2, ')'];
        }

        if ('^' === substr($data, 0, 1)) {
            return [3, '^'];
        }

        if ('*' === substr($data, 0, 1)) {
            return [4, '*'];
        }

        if ('/' === substr($data, 0, 1)) {
            return [5, '/'];
        }

        if ('+' === substr($data, 0, 1)) {
            return [6, '+'];
        }

        if ('-' === substr($data, 0, 1)) {
            return [7, '-'];
        }

        throw new \Exception("Syntax error");
    }

    protected function reduce($count, $index)
    {
        $args = array();
        for ($i = 0; $i < $count; $i++) {
            $this->stack->pop();
            $args[] = $this->stack->pop();
        }

        return call_user_func_array([$this, 'reduce' . $index], array_reverse($args));
    }

    protected function reduce0($a = null)
    {
        $returnValue = $a;
        return $returnValue;
    }

    protected function reduce1($a = null)
    {
        $returnValue = (float)$a;
        return $returnValue;
    }

    protected function reduce2($a = null, $b = null, $c = null)
    {
        $returnValue = $a + $c;
        return $returnValue;
    }

    protected function reduce3($a = null, $b = null, $c = null)
    {
        $returnValue = $a - $c;
        return $returnValue;
    }

    protected function reduce4($a = null, $b = null, $c = null)
    {
        $returnValue = $a * $c;
        return $returnValue;
    }

    protected function reduce5($a = null, $b = null, $c = null)
    {
        $returnValue = $a / $c;
        return $returnValue;
    }

    protected function reduce6($a = null, $b = null, $c = null)
    {
        $returnValue = pow($a, $c);
        return $returnValue;
    }

    protected function reduce7($a = null, $b = null)
    {
        $returnValue = $b;
        return $returnValue;
    }


}
