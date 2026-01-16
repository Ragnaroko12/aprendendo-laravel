<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HabitLog> $habitLogs
 * @property-read int|null $habit_logs_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\HabitFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Habit whereUserId($value)
 */
	class Habit extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $habit_id
 * @property string $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Habit $habit
 * @property-read \Illuminate\Database\Eloquent\Collection<int, HabitLog> $habitLogs
 * @property-read int|null $habit_logs_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\HabitLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereHabitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereUserId($value)
 */
	class HabitLog extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Habit> $habits
 * @property-read int|null $habits_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

