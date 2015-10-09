/// <reference path='../_all.ts' />

module angularShift.shifts {

    export interface shiftEventObject extends FullCalendar.EventObject {
        shiftValues: ShiftInterface;
    }

    export class ShiftEventConverter {
        public toEvent (shift: ShiftInterface): shiftEventObject {
            var startDate = new Date();
            startDate.setMilliseconds(shift.start);
            var endDate = new Date();
            endDate.setMilliseconds(shift.end);
            return  {
                title: !_.isUndefined(shift.title) ?  shift.title + '(' + shift.shiftType.name +  ')' : shift.shiftType.name,
                start: startDate,
                end: endDate,
                shiftValues: shift
            };
        }
    }

    angular.module('angularShift.shifts').service('ShiftsEventConverterService', ShiftEventConverter)
}
