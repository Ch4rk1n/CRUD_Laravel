<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admins
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereSenha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereUpdatedAt($value)
 */
	class Admins extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $id_user
 * @property string $produto
 * @property float $preco
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePreco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProduto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nome
 * @property int $telefone
 * @property string $email
 * @property string $senha
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSenha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

