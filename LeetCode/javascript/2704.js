var expect = function(val) {
    return {
        toBe: function(compareVal) {
            if (val === compareVal) {
                return true;
            } else {
                return "Error ==> Not Equal"
            }
        },
        notToBe: function(compareVal) {
            if (val !== compareVal) {
                return true;
            } else {
                return "Error ==> Equal"
            }
        }
    };
};


console.log(expect(5).toBe(5)); 
console.log(expect(5).notToBe(5)); 