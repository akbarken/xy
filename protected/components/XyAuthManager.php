<?php

/**
 * Created by PhpStorm.
 * User: yuanwanghong
 * Date: 14-12-2
 * Time: 下午11:12
 */
class XyAuthManager extends CDbAuthManager {

    public function addOperation($arrOpers) {
        foreach ($arrOpers as $name => $description) {
            $this->createOperation($name, $description);
        }
    }


    public function addRole($roleName, $arrChild) {
        $arrChild = is_array($arrChild) ? $arrChild : array($arrChild);
        $role = $this->createRole($roleName);

        foreach ($arrChild as $child) {
            $role->addChild($child);
        }
    }

} 