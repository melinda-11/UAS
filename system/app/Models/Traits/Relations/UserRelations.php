<?php

namespace App\Models\Traits\Relations;

use App\Models\UserDetail;

use App\Models\Produk;



trait UserRelations{

	function detail(){
		return $this->hasOne(UserDetail::class, 'id_user');
	}

	}
