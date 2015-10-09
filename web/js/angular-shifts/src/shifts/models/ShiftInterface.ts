/// <reference path='../_all.ts' />

module angularShift.shifts {

    /**
     * The interface for the shifts we are getting from the api.
     */
    export interface ShiftInterface {
        SID: number;
        title: string;
        shiftType: angularShift.shiftTypes.ShiftTypeInterface;
        neededAngelTypes: angularShift.neededAngels.NeededAngelTypeInterface;
        start: number;
        end: number;
        location: angularShift.locations.LocationInterface;
        shiftEntries: Array<angularShift.shiftEntries.ShiftEntryInterface>
        URL: string;
        PSID : number;
        created_by_user_id: number;
        created_at_timestamp: number;
        edited_by_user_id: number;
        edited_at_timestamp: number;
    }
}
